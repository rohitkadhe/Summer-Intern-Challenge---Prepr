<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/map.css')}}">
        <title>{{ config('app.name', 'PreprLabsDemo') }}</title>
    </head>

    <body>
        <div id='app'>
            @include('navigation.navbar')
            <div class="container mt-4">
                @yield('content')
            </div>
        </div>
        <script src='{{asset('js/app.js')}}'></script>
    </body>

</html>
