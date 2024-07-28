<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="/productos/{{$producto->id}}" method="POST">
        @csrf
        @method('PUT')


            <label>
                Editar producto:
                <input type="text" name="producto" value="{{$producto->producto}}">
            </label>
            <br>
            <br>

            <label>
                Editar descripcion :
                <input type="text" name="descripcion" value="{{$producto->descripcion}}">
            </label>

            <br>
            <br>

            <label>
                Editar precio :
                <input type="text" name="precio" value="{{$producto->precio}}">
            </label>

            <br>
            <br>
            {{-- <label>
                Editar cantidad :
                <input type="text" name="cantidad" value="{{$producto->cantidad}}">
            </label>

            <br>
            <br> --}}

            <button type="submit">
                Actualizar producto
            </button>

    </form>


</body>
</html>
