<x-app-layout>

    <a href="/clientes">volver a clientes</a>
    <h1>Nombre:{{$cliente->nombre}}</h1>

    <p>
        <b>Correo::</b>{{$cliente->correo}}
    </p>
    <p>
       <b>contraeña:</b> {{$cliente->contraseña}}
    </p>


    <a href="/clientes/{{$cliente->id}}/edit">
        editar
        </a>



        <form action="/clientes/{{$cliente->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">
                eliminar cliente
            </button>
        </form>>


</x-app-layout>
