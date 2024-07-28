<x-app-layout>
    <a href="/">volver al inicio</a>


    <h1>Crear Cliente</h1>
    <a href="/cliente/create">nuevo Cliente</a>

    <h1>CLIENTES CREADOS</h1>
    <ul>
        @foreach ($clientes as $cliente)

        <li>
            <a href="/clientes/{{$cliente->id}}">
            {{$cliente->nombre}}
            </a>
        </li>

        @endforeach
    </ul>
</x-app-layout>



