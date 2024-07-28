<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>FORMULARIO PARA CREAR UN EMPLEADO</h1>

    <form action="/empleados" method="POST">
        @csrf
        <label>
            Nombre:
            <input type="text" name="nombre">
        </label>

        <br>
        <br>

        <label>
            Edad:
            <input type="text" name="edad">
        </label>



        <br>
        <br>
        <button type="submit">
            Crear Empleado
        </button>

    </form>



</body>
</html>
