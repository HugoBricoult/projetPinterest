
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Le P') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('/css/marcofall.css')}}">
</head>

<!-- nav -->

<nav class="navbar navbar-light">
    <div class="d-md-flex d-block flex-row mx-md-auto mx-0">
        <a class="nav-item nav-link " href="/">Accueil</a>
    </div>
</nav>

<body>


    @if (Route::has('login'))
            <div class="top-right links">
        @auth
        <li class="nav-item dropdown profile">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <i class="fa fa-user" aria-hidden="true"></i>  {{ Auth::user()->first_name }}<span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a href="../../profile/{{Auth::user()->id}}/posts-create" class="dropdown-item">Créer un post</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Se déconnecter') }}
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
<script src="{{URL::asset('/js/waterfall.js')}}"></script>


</html>
