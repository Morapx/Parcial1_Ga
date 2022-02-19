<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Funcion</title>
</head>
<body>
    <h1>Crear Funcion</h1>
    <form method="post" action="{{route('funciones.store')}}">
        @csrf
        <label>Nombre</label>
        <input type ="text" name="pelicula">
        <br>
        <label>Dia</label>
        <input type ="text" name="fecha">
        <br>
        <label>Horario</label>
        <input type ="text" name="hora">
        <br>

        <button type="submit">Aceptar</button>
    </form>

    <a href="{{route('funciones.index')}}"> Volver a la lista </a>
</body>
</html>
