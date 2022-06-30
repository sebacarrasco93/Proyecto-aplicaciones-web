<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('lavavel', 'Edición de Formulario') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- JS -->
    <script src="{{ asset('js/fonasa.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places" async defer></script>

</head>

<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }

    .espaciado {
        margin-bottom: 10px;
    }
</style>

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
<main class="container">
    @include('partials.alerts')
    @yield('content')
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</body>

</html>
