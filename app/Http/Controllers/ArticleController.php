<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'title' => 'required|unique:articles|min:3',
            'subtitle' => 'required|min:3',
            'body' => 'required|min:10',
            'image' => 'required|image',
            'category' => 'required,'
        ]);

        $article = Article::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
            'image' => $request->has('image')
                ?
                $request->file('image')->store('public/img')
                :
                "img/ww.jpg",
            'category_id' => $request->category,
            'user_id'=> Auth::user()->id,
        ]);

        return redirect(route('homepage'))->with('message', 'Articolo creato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
