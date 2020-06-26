
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
<body>

<!-- nav -->
    <nav class="navbar navbar-light col-md-12 list-unstyled mb-3">
        <li class="col-md-1 col-12 text-center">P</li>
        <li class="nav-item nav-link col-md-1 col-12 text-center fix"><a href="/">Accueil</a></li>

    @if (Route::has('login'))
        @auth

        <li class="dropdown profile offset-md-9 col-md-1 col-12 justify-content-center text-center">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <i class="fa fa-user" aria-hidden="true"></i>  {{ Auth::user()->first_name }}<span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/profile/{{Auth::user()->id}}/posts">
                    Profile
                </a>
                <a href="../../profile/{{Auth::user()->id}}/posts-create" class="dropdown-item">Créer un post</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Se déconnecter') }}
                </a>


                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        @else
            <li class="nav-item offset-md-8 col-md-1 col-12 text-center"><a href="{{ route('login') }}">Login</a></li>

            @if (Route::has('register'))
            <li class="nav-item col-md-1 col-12 text-center"><a href="{{ route('register') }}">Register</a></li>
            @endif

        @endauth
    @endif
</nav>
    @yield('content')

</body>
<script src="{{URL::asset('/js/waterfall.js')}}"></script>


</html>
