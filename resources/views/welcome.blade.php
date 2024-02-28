<x-layout>
    
    
    <header id="header">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-12 p-0 d-flex justify-content-center align-items-center">
                    <!-- Carosello header -->
                    <div class="position-relative mt-3">
                        <div id="caroselloheader" class="carousel slide carousel-fade" data-bs-ride="carousel"
                            data-bs-pause="false">
                            <div class="carousel-inner crs-custom">
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
                                    <img src="{{ asset('./image/tecnologia.jpeg') }}" class="d-block w-100"
                                        alt="Tecnologia">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <h1 class=" title-custom text-s mt-3">THE AULAB POST</h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="">
        @if (session('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
    @endif
    </div>



        <article class="container my-5 " id="article_cards ">
        <div class="row justify-content-center align-items-center">
            @foreach ($articles as $article)
                <div class="col-12 col-md-6 col-lg-3 my-3 d-flex justify-content-center align-items-center">
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
                        urlUser="{{ route('article.byUser', ['user' => $article->user->id]) }}" 
                        readDuration="{{$article->readDuration()}}"
                        :article="$article"
                        />


                </div>
            @endforeach
        </div>
    </article>



    

</x-layout>
