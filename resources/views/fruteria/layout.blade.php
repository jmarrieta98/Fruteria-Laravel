<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"-->
    <title>@yield('titulo')</title>
</head>
<body>
</body>
</html>
<header>
    <nav>
        <a href="{{route("fruteria.index")}}"> Principal</a>
        <a href="{{route("fruteria.listado")}}"> Listado de Frutas</a>
        <a href="{{route("fruteria.create")}}"> Crear fruta nueva</a>
    </nav>
</header>
@yield('contenido')

<footer>

    <p>Página creada por José Manuel Arrieta Soto con Laravel</p>

</footer>