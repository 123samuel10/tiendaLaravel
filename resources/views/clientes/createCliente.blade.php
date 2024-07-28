<x-app-layout>
    <h1>FORMULARIO PARA CREAR UN CLIENTE</h1>

    <form action="/clientes" method="POST">
        @csrf
        <label>
            Nombre:
            <input type="text" name="nombre">
        </label>

        <br>
        <br>

        <label>
            Correo:
            <input type="text" name="correo">
        </label>

        <br>
        <br>

        <label>
            Contraseña:
            <input type="text" name="contraseña">
        </label>

        <br>
        <br>
        <button type="submit">
            Crear Cliente
        </button>
    </form>
</x-app-layout>
