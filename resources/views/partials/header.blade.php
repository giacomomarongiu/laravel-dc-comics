<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container w-75">
            <a href="{{ route('home') }}"> <img class="m-auto" src="{{ Vite::asset('resources/img/dc-logo.png') }}"
                    alt=""></a>


            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link  {{ Route::currentRouteName() === 'comics' ? 'active' : '' }}"
                            href="{{ route('home') }}">COMICS</a>
                    </li>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            SHOP
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
</header>
