
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pintareus') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('/css/grid.css')}}">
</head>

<!-- nav -->

<nav class="navbar navbar-light bg-light">
    <div class="d-md-flex d-block flex-row mx-md-auto mx-0">
        <a class="nav-item nav-link" href="/">Accueil</a>
    </div>
</nav>

<body>


    @if (Route::has('login'))
            <div class="top-right links">
        @auth
        <li class="nav-item dropdown profile">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->first_name }}<span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a href="{{ route('posts.create') }}" class="dropdown-item">Créer un post</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <a class="dropdown-item" href="/profile/{{Auth::user()->id}}/posts">
                    Profile
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        @else        
            <a class="nav-item" href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a class="nav-item"  href="{{ route('register') }}">Register</a>
            @endif

        @endauth
            </div>
    @endif

    @yield('content')

</body>


</html>
