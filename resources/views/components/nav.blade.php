<nav class="navbar  navbar-expand-lg fixed-top transition ">
    <div class="container-fluid fs-5">
        <a class="navbar-brand" hrefo="{{ route('homepage') }}">The Aulab Post</a>
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
        <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active " aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('article.index') }}">Articoli</a>
                </li>
                @guest
                </ul>
                <ul class="navbar-nav ">
                    <li class="nav-item fs-custom-nav">
                        <a class="nav-link p-0" href="{{ route('access.form') }}"> Registrati / Accedi</a>
                    </li>
                @endguest

                @Auth
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('article.create') }}">Inserisci Articolo</a>
                    </li>
                </ul>
                <ul class="navbar-nav ">
                    <a class="nav-link " href="">Benvenuto: {{ Auth::user()->name }}</a>
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
