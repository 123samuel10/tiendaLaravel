<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>FORMULARIO PARA CREAR UN PRODUCTO</h1>

    <form action="/productos" method="POST">
        @csrf
        <label>
            Producto:
            <input type="text" name="producto">
        </label>

        <br>
        <br>

        <label>
            Descripcion:
            <input type="text" name="descripcion">
        </label>
        <br>
        <br>

        {{-- <label>
            Cantidad:
            <input type="text" name="cantidad">
        </label>
        <br>
        <br> --}}

        <label>
            Precio:
            <input type="text" name="precio">
        </label>

        <br>
        <br>
        <button type="submit">
            Crear Producto
        </button>

    </form>

</body>
</html>
