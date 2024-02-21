<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid fs-5">
        <a class="navbar-brand" hrefo="{{ route('homepage') }}">The Aulab Post</a>
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
        <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('article.index') }}">Articoli</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li>
                                <a href="{{ route('article.byCategory', compact('category')) }}">{{$category->name}}</a>
                            </li>
                        @endforeach

                    </ul>
                </li>
                @guest
                </ul>
                <ul class="navbar-nav ">
                    <li class="nav-item fs-custom-nav">
                        <a class="nav-link" href="{{ route('access.form') }}"> Registrati / Accedi</a>
                    </li>
                @endguest

                @Auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('article.create') }}">Inserisci Articolo</a>
                    </li>
                </ul>
                <ul class="navbar-nav ">
                    <a class="nav-link" href="">Benvenuto: {{ Auth::user()->name }}</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <div class="custom-btn">
                            <button class="button btn1">Logout</button>
                        </div>
                    </form>
                </ul>
            @endauth
        </div>
    </div>
</nav>
