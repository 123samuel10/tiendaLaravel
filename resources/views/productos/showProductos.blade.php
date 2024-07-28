<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <a href="/productos">volver a productos</a>
    <h1>Nombre:{{$producto->producto}}</h1>

    <p>
        <b>Descripcion:</b>{{$producto->descripcion}}
    </p>

    <p>
        <b>Precio:</b>{{$producto->precio}}
    </p>

    {{-- <p>
        <b>Cantidad:</b>{{$producto->cantidad}}
    </p> --}}

    {{-- @php
        $total=$producto->precio*$producto->cantidad;
    @endphp
    <p>
        <b>total:</b>{{$total}}
    </p> --}}

    <a href="/productos/{{$producto->id}}/edit">
        editar
        </a>



        <form action="/productos/{{$producto->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">
                eliminar producto
            </button>
        </form>>



</body>
</html>
