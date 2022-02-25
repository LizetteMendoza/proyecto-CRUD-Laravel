<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de tareas</title>
    <style>
        html{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: black;
            color: white;
            
        }
    </style>
</head>
<body>
    <h1>Crear tarea</h1>
    <form action="/tareas/store" method="POST"> <!--Ruta que recibe y nada mas: store-->
        <label for="tarea">Tarea</label><br>
        <input type="text" name="tarea"><br>
        <label for="descripcion">Descripción</label><br>
        <textarea name="descripcion" id="descripcion" cols="21" rows="10"></textarea><br>
        <label for="categoria">Categoria</label><br>
        <select name="categoria" id="categoria">
            <option value="Escuela">Escuela</option>
            <option value="Trabajo">Trabajo</option>
            <option value="Personal">Personal</option>
        </select><br><br><br>
        <button type="submit">Eviar</button>
    </form>
    
</body>
</html>