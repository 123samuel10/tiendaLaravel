<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <a href="/empleados">volver a posts</a>
    <h1>Nombre:{{$empleado->nombre}}</h1>

    <p>
        <b>Edad:</b>{{$empleado->edad}}
    </p>



    <a href="/empleados/{{$empleado->id}}/edit">
        editar
        </a>



        <form action="/empleados/{{$empleado->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">
                eliminar post
            </button>
        </form>>




</body>
</html>
