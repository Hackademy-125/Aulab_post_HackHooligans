<nav class="navbar  navbar-expand-lg sticky-top transition ">
    <div class="container-fluid fs-5">
        <a href="{{ route('homepage') }}" ><img class="img-navbar my-0" src="/storage/images/logoAulabPost.png" alt="Logo the aulab post"></a>
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li>
                                
                                <a href="{{ route('article.byCategory', compact('category')) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('careers') }}">Lavora con noi</a>
                </li>
                @guest
                </ul>
                <ul class="navbar-nav ">
                    <li class="nav-item fs-custom-nav">
                        <a class="nav-link p-0 custom-link" href="{{ route('access.form') }}">Registrati / Accedi</a>
                    </li>
                @endguest

                @Auth
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person fs-4"></i> {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('article.create') }}">Inserisci Articolo</a></li>
                
                        @if(Auth::user()->is_admin)
                        <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard Admin</a></li>
                        @endif
                
                        @if(Auth::user()->is_revisor)
                        <li><a class="dropdown-item" href="{{ route('revisor.dashboard') }}">Dashboard Revisore</a></li>
                        @endif
                
                       
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            @endauth
        </div>
    </div>
</nav>
