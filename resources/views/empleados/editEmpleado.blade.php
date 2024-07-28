<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



    <form action="/empleados/{{$empleado->id}}" method="POST">
        @csrf
        @method('PUT')


            <label>
                Editar nombre:
                <input type="text" name="nombre" value="{{$empleado->nombre}}">
            </label>
            <br>
            <br>

            <label>
                Editar edad :
                <input type="text" name="edad" value="{{$empleado->edad}}">
            </label>

            <br>
            <br>
            <button type="submit">
                Actualizar empleado
            </button>

    </form>



</body>
</html>
