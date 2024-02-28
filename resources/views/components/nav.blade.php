<nav class="navbar navbar-expand-lg nav-custom transition nav-primary" aria-label="Fifth navbar example">
    <div class="container-fluid nav-size">
        <a href="{{ route('homepage') }}"><img class="img-navbar my-0" src="/image/Minimal_initial_brand_logo_2.png"
                id="nav_logo" alt="Logo the aulab post"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05"
            aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list text-white"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav d-flex justify-content-center w-100 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link pt-2  " aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link pt-2  " href="{{ route('article.index') }}">Articoli</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link pt-2  dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categorie
                    </a>
                </li>
                <ul class="dropdown-menu ">
                    @foreach ($categories as $category)
                        <li>
                            <a class="buttondrop btndrop"
                                href="{{ route('article.byCategory', compact('category')) }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>


                {{-- CONTROLLO PER LA RICHIESTA DEL LAVORO  --}}
                
                @if (!Auth::user())
                    <li class="nav-item">
                        <a class="nav-link pt-2" href="{{ route('careers') }}">Lavora con noi</a>
                    </li>
                @elseif(Auth::user()->is_admin && Auth::user()->is_writer && Auth::user()->is_revisor)
                    
                @else
                    <li class="nav-item">
                        <a class="nav-link pt-2" href="{{ route('careers') }}">Lavora con noi</a>
                    </li>
                @endif
           

            @guest
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item fs-custom-nav  me-2">
                    <a class="nav-link  custom-link  pd-nav fs-nv-media"
                        href="{{ route('access.form') }}">Registrati/Accedi</a>
                </li>

            @endguest

            @auth

            </ul>
            <ul class="p-0 pt-lg-3 list-unstyled">
                <li class="nav-item me-5 dropdown d-lg-flex justify-content-end mt-1">
                    <a class="nav-link dropdown-toggle me-md-3 pt-lg-1" href="#" role="button"
                        id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person  me-2"></i>{{ Auth::user()->name }}
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

                        @if (Auth::user()->is_writer)
                            <li><a class="dropdown-item buttondrop btndrop"
                                    href="{{ route('writer.dashboard') }}">Dashboard
                                    Redattore</a></li>
                        @endif


                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="dropdown-item buttondrop btndrop" type="submit">Logout</button>
                        </form>
                </li>

            </ul>

        @endauth
        <form class="d-flex align-items-center pt-2 pt-lg-0" method="GET" action="{{ route('article.search') }}">
            <input class="form-table2 p-table2  me-2 search-input" type="search" placeholder="Cerca..."
                aria-label="Search" name="query">
            <button type="submit" class="btn11"><i class="bi bi-search fs-4 search-icon "></i></button>
        </form>
    </div>
</div>
</nav>
