<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1{
            color:red;
        }
    </style>
</head>
<body>
    <h1>Este es un correo electrónico de prueba</h1>
    <p>El curso <strong>{{ $course->title }}</strong> ha sido rechazado</p>
    <h2>Motivo del rechazo</h2>
    {!! $course->observation->body !!}
</body>
</html>