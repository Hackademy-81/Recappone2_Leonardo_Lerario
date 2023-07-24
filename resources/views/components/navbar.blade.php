<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Music</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('album.index')}}">Tutti i nostri Album</a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">Registrati</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Accedi</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route('album.create')}}">Crea Album</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Benvenuto {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit()">Logout</a></li>
                        <form action="{{route('logout')}}" id="logout-form" method="POST" class="d-none">
                            @csrf</form>
                        </ul>
                    </li>
                    @endguest
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>