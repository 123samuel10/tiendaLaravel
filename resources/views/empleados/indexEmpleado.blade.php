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


    <h1>Crear Empleado</h1>
    <a href="/empleado/create">nuevo Empleado</a>

    <h1>CLIENTES CREADOS</h1>
    <ul>
        @foreach ($empleados as $empleado)

        <li>
            <a href="/empleados/{{$empleado->id}}">
            {{$empleado->nombre}}
            </a>
        </li>

        @endforeach
    </ul>

</body>
</html>
