<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="/public/css/style.css" />
        <link rel="stylesheet" href="{{ asset('../css/app.css') }}" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="../css/app.css"/>
    </head>
    <body >
        @include('componentes.navegacion')
        @yield('contenido')
        @include("componentes.footer")
    </body>
</html>
