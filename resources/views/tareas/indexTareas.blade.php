<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <style>
        html{
            background-color: rgb(204, 27, 189);
            color:white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Tareas</h1>

    <a href="tareas/create">Crear nueva tarea</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Tarea</th>
            <th>Descripcion</th>
            <th>Tipo</th>
            <th>Acciones</th>
        </tr>
        @foreach ($tareas as $tarea)
            <tr> 
                <td>{{$tarea->id}}</td>
                <td>{{$tarea->tarea}}</td>
                <td>{{$tarea->descripcion}}</td>
                <td>{{$tarea->categoria}}</td>
                <td><a href="tareas/{{$tarea->id}}">Ver detalles</a></td>
                <td><a href="tareas/{{$tarea->id}}/edit">Editar</a></td>
                <form action="/tareas/{{$tarea->id }}", method="POST">
                    @csrf
                    @method('DELETE')
                    <td><input type="submit" value="Borrar"></td>
                </form>
            </tr>
        @endforeach
    </table>
</body>
</html>