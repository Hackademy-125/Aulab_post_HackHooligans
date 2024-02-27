<x-layout>
    <header class="text-index mt-5">
        <div class="container-fluid p-5 text-center">
            <div class="row">
                <h1 class="display-3 ">
                    Tutti gli articoli per : {{$query}}
                </h1>
            </div>
        </div>
    </header>



    <article class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-12 col-md-6 col-lg-3 my-3">
                    {{-- Card fatta con componente --}}
                    <x-card 
                        :tags="$article->tags"
                        title="{{ $article->title }}" 
                        subtitle="{{ $article->subtitle }}"
                        image="{{ Storage::url($article->image) }}"
                        category="{{ $article->category->name ?? 'non categorizzato' }}"
                        icon="{{ $article->category->icon }}" 
                        data="{{ $article->created_at->format('d/m/y') }}"
                        user="{{ $article->user->name }}" 
                        url="{{ route('article.show', compact('article')) }}"
                        urlCategory="{{ route('article.byCategory', ['category' => $article->category->id ?? 'categoria non trovata']) }}"
                        urlUser="{{ route('article.byUser', ['user' => $article->user->id]) }}" />

                </div>
            @endforeach
        </div>
    </article>
    
</x-layout>
