<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle de Venta</title>

</head>
<body>

    <a href="/ventas">volver a ventas</a>
    <div class="container">
        <h1>Detalle de Venta</h1>
        <div class="venta-details">
            @csrf
            <table>
                <tr>

                    <th>ID de Venta</th>
                    <td>{{ $venta->id }}</td>
                </tr>
                <tr>

                    <th>Cliente</th>
                    <td>{{ $venta->cliente->nombre }}</td> <!-- Mostrar nombre del cliente -->
                </tr>
                <tr>
                    <th>Producto</th>
                    <td>{{ $venta->producto->producto }}</td> <!-- Mostrar nombre del producto -->
                </tr>
                <tr>
                    <th>Empleado</th>
                    <td>{{ $venta->empleado->nombre }}</td> <!-- Mostrar nombre del empleado -->
                </tr>
                <tr>
                    @php
                        $total=$venta->cantidad*$venta->producto->precio;
                    @endphp

                    <th>Total</th>
                    <td>{{ $total }}</td>
                </tr>
                <!-- Agrega más detalles según sea necesario -->
            </table>
        </div>
    </div>
    <form action="/ventas/{{$venta->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">
            eliminar venta
        </button>
    </form>>
</body>
</html>
