<x-layout>

    <div class="container-fluid p-5 text-center text-white bg-custom " >
        <div class="row">
            <h1 style="">The Aulab Post </h1>
        </div>
    </div>
    @if (session('message'))
        <div class="alert alert-danger text-center">
            {{ session('message') }}
        </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3 ">
                    {{-- Card fatta con componente --}}
                    <x-card 
                    title="{{ $article->title }}" 
                    subtitle="{{ $article->subtitle }}"
                    image="{{ Storage::url($article->image) }}"
                    category="{{ $article->category->name ?? 'non categorizzato' }}"
                    icon="{{$article->category->icon}}"
                    
                    data="{{ $article->created_at->format('d/m/y') }}" 
                    user="{{ $article->user->name }}"
                    url="{{ route('article.show', compact('article')) }}"
                    urlCategory="{{ route('article.byCategory', ['category' => $article->category->id ?? 'categoria non trovata']) }}"
                    urlUser="{{ route('article.byUser', ['user' => $article->user->id]) }}"

                    />

                </div>
            @endforeach
        </div>
    </div>

</x-layout>
