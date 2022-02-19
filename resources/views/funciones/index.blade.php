<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de funciones</title>
</head>
<body>
    <h1>Funciones</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Dia</th>
                <th>Horario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($funciones as $funcion)
                <tr>
                    <td>{{$funcion->pelicula}}</td>
                    <td>{{$funcion->fecha}}</td>
                    <td>{{$funcion->hora}}</td>
                    <td>
                        <a>
                        <form method="post" action ="{{route('funciones.destroy', $funcion->id)}}">
                            @csrf
                            @method('delete')
                            <button type="submit"> Quitar </button>
                        </form>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('funciones.create')}}">Crear Funcion</a>
</body>
</html>
