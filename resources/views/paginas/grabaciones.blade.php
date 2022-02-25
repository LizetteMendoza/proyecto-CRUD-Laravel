<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>grabaciones de {{$nombre}} </h1>
    <h2>
        @if(isset($year))
            Del año {{$year}}
        @else
            De todos los tiempo
        @endif
    </h2>
    <ol>
        @for ($i =0; $i<$cantidad; $i++)
            <li>Algun texto {{$i}}</li>
        @endfor
    </ol>
    <p>Parrafo</p>
</body>
</html>