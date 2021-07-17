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

        <!-- Iconos -->        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <br><br>
            <h1>Lista de empleados</h1>
            <br>
            <div class="row">
                <div class="col-md-10">

                </div>
                <div class="col-md-2">
                    <a href="/" type="button" class="btn btn-success"><i class="fas fa-user-plus"></i> Crear</a>
                </div>
            </div>
            <br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"><i class="fas fa-user"></i> Nombre</th>
                        <th scope="col"><i class="fas fa-at"></i> Email</th>
                        <th scope="col"><i class="fal fa-venus-mars"></i> Sexo</th>
                        <th scope="col"><i class="fas fa-briefcase"></i> Area</th>
                        <th scope="col"><i class="fas fa-envelope"></i> Boletin</th>
                        <th scope="col">Modificar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($empleados as $empleado)
                    <tr>
                        <td>{{$empleado->nombre}}</td>
                        <td>{{$empleado->email}}</td>
                        <td>{{$empleado->sexo}}</td>
                        <td>{{$empleado->area}}</td>
                        @if ($empleado->boletin == null)
                            <td>No</td>
                        @endif
                        @if ($empleado->boletin <> null)
                            <td>Si</td>
                        @endif
                        <td><a href="/empleados/edit/{{$empleado->id}}"><i class="fas fa-edit"></i></a></td>
                        <td><a href="/empleados/delete/{{$empleado->id}}"><i class="fas fa-trash-alt"></i></a></td>                        
                    </tr>
                @endforeach
                </tbody>
            </table>
            <br><br><br>
        </div>
    </body>
</html>