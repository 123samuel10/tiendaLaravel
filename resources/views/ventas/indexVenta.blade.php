<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Ventas</title>
</head>
<body>
    <a href="/">volver al inicio</a>
    <h1>Listado de Ventas</h1>
    <a href="/ventas/create">Nueva Venta</a>

    <ul>
        @foreach ($ventas as $venta)
        <li>
            <a href="/ventas/{{ $venta->id }}">Cliente: {{ $venta->cliente->nombre }} - Producto:{{ $venta->producto->producto }}</a>
        </li>
        @endforeach
    </ul>
</body>
</html>
{{-- Cliente: {{ $venta->cliente ? $venta->cliente->nombre : 'N/A' }} -
                    Producto: {{ $venta->producto ? $venta->producto->producto : 'N/A' }} --}}
