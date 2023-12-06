<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @if(isset($title))
        {{$title}}
        @else
        MangaReader
        @endif
    </title>

    <!--BOOTSTRAP ASSETS!-->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-warning p-2 mb-1">
        <a class="navbar-brand" href={{URL::to('/');}}>MangaReader</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">#</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </ul>
            <ul class="navbar-nav">
                @guest
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href={{URL::to('/login');}}>Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href={{URL::to('/register');}}>Register</a>
                </li>
                @endguest
                @auth
                <li class="nav-item">

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="route('logout')" class="nav-link" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </li>
                @endauth
        </div>
    </nav>
    @yield('content')
</body>

</html>