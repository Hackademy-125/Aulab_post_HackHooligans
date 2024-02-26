<nav class="navbar nav-custom navbar-expand-lg  transition nav-primary">
    <div class="container-fluid fs-5">
        <a href="{{ route('homepage') }}"><img class="img-navbar my-0" src="/image/Minimal_initial_brand_logo_2.png"
                id="nav_logo" alt="Logo the aulab post"></a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-center w-100 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('article.index') }}">Articoli</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu ">
                        @foreach ($categories as $category)
                            <li>
                                <a class="buttondrop btndrop"
                                    href="{{ route('article.byCategory', compact('category')) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('careers') }}">Lavora con noi</a>
                </li>

                </li>
                @guest
                </ul>

                <ul class="navbar-nav ">
                    <li class="nav-item fs-custom-nav">
                        <a class="nav-link p-0 custom-link  " href="{{ route('access.form') }}">Registrati/Accedi</a>
                    </li>

                @endguest

                @Auth

                </ul>
                <ul class="p-0 my-auto ">
                    <li class="nav-item me-5 dropdown d-flex justify-content-end mt-1">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="navbarDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person  fs-4"></i>{{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu me-5" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item buttondrop btndrop" href="{{ route('article.create') }}">Inserisci
                                    Articolo</a>
                            </li>

                            @if (Auth::user()->is_admin)
                                <li><a class="dropdown-item buttondrop btndrop"
                                        href="{{ route('admin.dashboard') }}">Dashboard Admin</a>
                                </li>
                            @endif

                            @if (Auth::user()->is_revisor)
                                <li><a class="dropdown-item buttondrop btndrop"
                                        href="{{ route('revisor.dashboard') }}">Dashboard
                                        Revisore</a></li>
                            @endif


                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item buttondrop btndrop" type="submit">Logout</button>
                            </form>
                    </li>

                </ul>

            @endauth

        </div>
    </div>
    <form class="d-flex align-items-center" method="GET" action="{{ route('article.search') }}">
        <input class="form-control me-2 search-input" type="search" placeholder="Cerca..." aria-label="Search"
            name="query">
        <button type="submit" class="btn11"><i class="bi bi-search fs-4 search-icon "></i></button>
    </form>

    {{-- <form class="d-flex" method="GET" action="{{route('article.search')}}">
        <input class="form-control me-2 " type="search" placeholder="" aria-label="Search" name="query">
        <button type="submit" class="btn11"><a href=""><i class="bi bi-search fs-4"></i></a></button></a>
      </form> --}}
</nav>
