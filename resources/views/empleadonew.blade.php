<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
    </head>
    <body>
        <div class="container">
            <br><br>
            <div class="card">
                <h5 class="card-header">Empleado Guardado con Exito</h5>
                <div class="card-body">
                <h5 class="card-title">Nombre: {{$empleado->nombre}}</h5>
                @if ($empleado->boletin == null)
                    <p class="card-text">Ten en cuenta que el empleado <b>NO</b> desea que le envie boletines informativos.</p>
                @endif
                @if ($empleado->boletin <> null)
                    <p class="card-text">Ten en cuenta que el empleado <b>SI</b> desea que le envie boletines informativos.</p>
                @endif
                <a href="/empleados" class="btn btn-primary">Aceptar</a>
                </div>
            </div>
            <br><br>
        </div>
    </body>
</html>