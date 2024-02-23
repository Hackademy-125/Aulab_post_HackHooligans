<x-layout>
    <header>
        <div class="container-fluid ">
            <div class="row">
                <div class="col-12 p-0">
                    <!-- Carosello header -->
                    <div class="position-relative mt-3">
                        <div id="caroselloheader" class="carousel slide carousel-fade" data-bs-ride="carousel"
                            data-bs-pause="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="5000">
                                    <img src="{{ asset('./image/moda.jpg') }}" class="d-block w-100" alt="Moda">
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <img src="{{ asset('./image/auto2.jpg') }}" class="d-block w-100" alt="Auto">
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <img src="{{ asset('./image/mondo.jpg') }}" class="d-block w-100" alt="Mondo">
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <img src="{{ asset('./image/giornale.jpg') }}" class="d-block w-100" alt="Politica">
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <img src="{{ asset('./image/tecnologia.jpg') }}" class="d-block w-100"
                                        alt="Tecnologia">
                                </div>
                            </div>
                        </div>
                        <h1 class="titles title-custom text-s mt-3">THE AULAB POST</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-12 col-md-6 col-lg-3 my-3">
                    {{-- Card fatta con componente --}}
                    <x-card title="{{ $article->title }}" subtitle="{{ $article->subtitle }}"
                        image="{{ Storage::url($article->image) }}"
                        category="{{ $article->category->name ?? 'non categorizzato' }}"
                        icon="{{ $article->category->icon }}" data="{{ $article->created_at->format('d/m/y') }}"
                        user="{{ $article->user->name }}" url="{{ route('article.show', compact('article')) }}"
                        urlCategory="{{ route('article.byCategory', ['category' => $article->category->id ?? 'categoria non trovata']) }}"
                        urlUser="{{ route('article.byUser', ['user' => $article->user->id]) }}" />

                </div>
            @endforeach
        </div>
    </div>
</x-layout>
