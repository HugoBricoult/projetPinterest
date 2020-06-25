
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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<!-- nav -->

<nav class="navbar navbar-light bg-light">
    <div class="d-md-flex d-block flex-row mx-md-auto mx-0">
        <a class="nav-item nav-link" href="/">Accueil</a>
        <a class="nav-item nav-link" href="#">Abonnements</a>
    </div>
</nav>

<body>


    @if (Route::has('login'))
            <div class="top-right links">
        @auth
            <a class="nav-item" href="/logout">Se deconnecter</a>
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
