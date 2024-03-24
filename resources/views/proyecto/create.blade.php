<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
</head>

<body>
    <form action="{{ route('proyectCreate') }}" method="post">
        @csrf
        <div>
            <h2>Crear Proyecto</h2>
            <div>
                <h4>Nombre:</h4>
                <input type="text" name="nombre">
            </div>
            <div>
                <h4>Descripcion:</h4>
                <input type="text" name="descripcion">
            </div>
            <div>
                <h4>imagen:</h4>
                <input type="text" name="imagen">
            </div>
            <div>
                <h4>url:</h4>
                <input type="text" name="url">
            </div>
            <button type="submit">Guardar Proyecto</button>
        </div>
    </form>

</body>

</html>
