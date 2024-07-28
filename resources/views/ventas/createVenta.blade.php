<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Venta</title>
</head>
<body>
    <h1>Crear Venta</h1>
    <form action="/ventas" method="POST">
        @csrf
        <label>


            Cliente:
            <select name="cliente_id">
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                @endforeach
            </select>



        </label>
        <br>
        <br>
        <label>
            Producto:
            <select name="producto_id">
                @foreach ($productos as $producto)
                    <option value="{{ $producto->id }}">{{ $producto->producto }}</option>
                @endforeach
            </select>
        </label>
        <br>
        <br>
        <label>
            Empleado:
            <select name="empleado_id">
                @foreach ($empleados as $empleado)
                    <option value="{{ $empleado->id }}">{{ $empleado->nombre }}</option>
                @endforeach
            </select>
        </label>
        <br>
        <br>
        <label>
            Cantidad:
            <input type="text" name="cantidad" placeholder="cantidad" required>
        </label>
        <br><br>
        {{-- <label>
            Total:
            <select name="total">
                @foreach ($productos as $producto)
                    <option value="{{ $producto->id }}">{{ $producto->cantidad }}</option>
                @endforeach
            </select>
        </label> --}}

        <br>
        <br>



        <button type="submit">Crear Venta</button>
    </form>
</body>
</html>
