<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Proyecto Dos - Agregar</title>
</head>
<body>
    <form action="/actores/{{$id}}/editar" method="post">
        {{csrf_field()}}
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" placeholder="{{$nombre}}">
        <label for="apellido">Apellillo</label>
        <input type="text" id="apellido" name="apellido" placeholder="{{$apellido}}">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
