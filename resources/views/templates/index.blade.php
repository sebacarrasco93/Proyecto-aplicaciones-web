<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('lavavel', 'Dashboard Administración') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="/img/gobierno.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Formulario Fonasa
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a class="nav-link" href="{{ url('/admin') }}">Home <span
                                        class="sr-only">(current)</span></a>
                            @else
                                <a class="nav-link" href="{{ route('login') }}">Inicio Sesión <span
                                        class="sr-only">(current)</span></a>
                            @endauth
                    @endif
                </li>
                <li class="nav-item">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault('logout-form'); document.getElementById('logout-form').submit();">Cerrar
                                    Sesion</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                                    @csrf
                                </form>
                            @endauth
                    @endif
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/faq') }}">Preguntas Frecuentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Soporte</a>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
</body>

</html>
