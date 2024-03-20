<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show', 'byUser', 'byCategory', 'articleSearch');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('article.index', compact('articles'));
    }

    public function articleSearch(Request $request)
    {
        $query = $request->input('query');
        $articles = Article::search($query)->where('is_accepted', true)->orderby('created_at', 'desc')->get();

        return view('article.search-index', compact('articles', 'query'));
    }



    //!FILTRO PER UTENTE
    public function byUser(User $user)
    {
        $articles = $user->articles()->where('is_accepted', true)->orderby('created_at', 'desc')->get();
        return view('article.by-user', compact('user', 'articles'));
    }


    //!FILTRO PER CATEGORIA ___ DESC = DECRESCENTE
    public function byCategory(Category $category)
    {
        $articles = $category->articles()->where('is_accepted', true)->orderby('created_at', 'desc')->get();
        return view('article.by-category', compact('category', 'articles'));
    }


    /**
     *!Pagina di creazione articolo 
     */

     public function create()
    {
        return view('article.create');
    }

    /**
     * !Invio dei dati del form di creazione articolo
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:20',
            'subtitle' => 'required|max:30',
            'body' => 'required|min:5',
            'image' => 'image',
            'category' => 'required',
            'tags' => 'required|max:40',
        ]);

        $article = Article::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' =>  $request->body,
            "image" => $request->file('image')->store('public/images'),
            'category_id' => $request->category,
            'user_id' => Auth::user()->id,
            'slug'=> Str::slug($request->title),
        ]);


        $tags = explode(',', $request->tags);
        foreach ($tags as $i => $tag) {
            $tags[$i] = trim($tag);
        }

        foreach ($tags as $tag) {
            $newTag = Tag::updateOrCreate(
                ['name' => $tag],
                ['name' => strtolower($tag)],
            );
            $article->tags()->attach($newTag);
        }


        return redirect(route('homepage'))->with('message', 'Articolo creato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|max:20|unique:articles,title,'.$article->id,
            'subtitle' => 'required|max:30',
            'body' => 'required|min:5',
            'image' => 'image',
            'category' => 'required',
            'tags' => 'required|max:40',
        ]);

        $article->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' =>  $request->body,
            'category_id' => $request->category,
            'slug'=> Str::slug($request->title),
        ]);
        if ($request->image) {
            Storage::delete($article->image);
            $article->update([
                "image" => $request->file('image')->store('public/images'),
            ]);
        }


        $tags = explode(',', $request->tags);
        foreach ($tags as $i => $tag) {
            $tags[$i] = trim($tag);
        }

        $newTags= [];

        foreach ($tags as $tag) {
            $newTag = Tag::updateOrCreate(
                ['name' => $tag],
                ['name' => strtolower($tag)],
            );
            $newTags[] = $newTag->id;
        }
        
        
        $article->tags()->sync($newTag);
        return redirect(route('writer.dashboard'))->with('message', 'hai correttamente aggiornato l\'articolo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        foreach ($article->tags as $tag) {
            $article->tags()->detach($tag);
        }

        $article->delete();
        return redirect(route('writer.dashboard'))->with('message', 'hai correttamente eliminato l\'articolo');

    }
}
