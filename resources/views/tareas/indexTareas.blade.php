<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <style>
        html{
            background-color: black;
            color:white;
        }
    </style>
</head>
<body>
    <h1>Tareas</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Tarea</th>
            <th>Descripcion</th>
            <th>Tipo</th>
        </tr>
        @foreach ($tareas as $tarea)
            <tr> 
                <td>{{$tarea->id}}</td>
                <td>{{$tarea->tarea}}</td>
                <td>{{$tarea->descripcion}}</td>
                <td>{{$tarea->categoria}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>