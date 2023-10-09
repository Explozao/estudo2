<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/estilo.css">
</head>
<body>
    <div class="menu">
        <div class="logo">
            <a href="/"><h1>Casa<span>De</span>Festa</h1></a>
        </div>
        <div class="textomenu">
            <p><a href="/eventos">Eventos</a></p>
            <p><a href="/criarEventos">Criar Eventos</a></p>
            <p><a href="/cadastrar">Se cadastrar</a></p>
        </div>
    </div>

    @yield('content')
</body>
</html>