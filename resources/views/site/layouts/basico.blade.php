<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super gestão - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
    </head>

    <body>
       @include('site.layouts._partials.topo')
       @yield('principal')
       @yield('sobre-nos')
       @yield('contato')
    </body>
</html>