<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <a href="/">volver al inicio</a>


    <h1>Crear Productos</h1>
    <a href="/producto/create">nuevo Producto</a>

    <h1>PRODUCTOS CREADOS</h1>
    <ul>
        @foreach ($productos as $producto)

        <li>
            <a href="/productos/{{$producto->id}}">
            {{$producto->producto}}
            </a>
        </li>

        @endforeach
    </ul>

</body>
</html>
