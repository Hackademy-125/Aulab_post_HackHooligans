<x-layout>

    <div class="container-fluid p-5  text-center text-index mt-5">
        <div class="row">
            <h1 class="display-2">
                <span class="font-title">{{ $article->title }}</span>
            </h1>
        </div>
    </div>


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="d-flex justify-content-center">
                    <img src="{{ Storage::url($article->image) }}" alt="Foto di copertina" class="img-fluid my-3">
                </div>

                <div class="text-center font-title">
                    <h2>{{ $article->subtitle }}</h2>
                </div>
                <div class="text-center">
                    <div class="my-3">
                        <p>Redatto da {{ $article->user->name }} il {{ $article->created_at->format('d/m/y') }}</p>
                    </div>
                </div>

                <div class="text-center">
                    <div class="my-3">                 
                            <p class="small fst-italic">
                                @foreach ($article->tags as $tag)
                                    #{{ $tag->name }}
                                @endforeach
                            </p>
                    </div>
                </div>

                <hr>
                <p class="font-paragraph">{{ $article->body }}</p>
                <div class="text-center">
                    <a href="{{ route('revisor.dashboard') }}"
                        class="btn btn-return btn-return-hover text-dark my-5">Torna
                        indietro</a>
                </div>

                <div class="d-flex justify-content-evenly">
                    @if (Auth::user() && Auth::user()->is_revisor)
                        <form action="{{ route('revisor.rejectArticle', compact('article')) }}" method="POST">
                            @csrf
                            <button class="button-details btn-delete"> Rifiuta articolo</button>
                        </form>

                        <form action="{{ route('revisor.acceptArticle', compact('article')) }}" method="POST">
                            @csrf
                            <button class="button-details btn-confirm"> Accetta articolo </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-layout>
