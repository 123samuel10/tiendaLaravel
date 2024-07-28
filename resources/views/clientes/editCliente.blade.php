
<x-app-layout>


    <h1>este es el edit cliente</h1>

    <form action="/clientes/{{$cliente->id}}" method="POST">
        @csrf
        @method('PUT')


            <label>
                Editar nombre:
                <input type="text" name="nombre" value="{{$cliente->nombre}}">
            </label>
            <br>
            <br>

            <label>
                Editar correo :
                <input type="text" name="correo" value="{{$cliente->correo}}">
            </label>
            <br>
            <br>

            <label>
                Editar contraseña:
                <input type="text" name="contraseña" value="{{$cliente->contraseña}}">
            </label>
            <br>
            <br>
            <button type="submit">
                Actualizar cliente
            </button>

    </form>

</x-app-layout>
