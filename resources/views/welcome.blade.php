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
            <br>
            <h1>Crear Empleado</h1>
            <br>
            <div class="row">
                <div class="col-md-10">
                    <div class="alert alert-primary" role="alert">
                        Los campos con asteriscos (*) son obligatorios
                    </div>
                </div>
                <div class="col-md-2">
                    <a href="/empleados" type="button" class="btn btn-success">Ver Empelados</a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12">
                    <form action="/newempleadosave" method="POST">
                        {{ csrf_field() }}
                        <div class="row mb-3">
                            <label for="nombre" class="col-sm-2 col-form-label">Nombre Completo*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo del empleado"  @if ($errors->has('nombre')) is-invalid @endif>
                                @if ($errors->has('nombre'))
                                    @foreach ($errors->get('nombre') as $error)
                                        <h6 style="color: red">
                                            <blockquote>{{ $error }}</blockquote>
                                        </h6>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">Correo Electronico*</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico"   @if ($errors->has('email')) is-invalid @endif>
                                @if ($errors->has('email'))
                                    @foreach ($errors->get('email') as $error)
                                        <h6 style="color: red">
                                            <blockquote>{{ $error }}</blockquote>
                                        </h6>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Sexo*</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sexo" id="gridRadios1" value="Masculino"   @if ($errors->has('sexo')) is-invalid @endif>
                                    <label class="form-check-label" for="gridRadios1">
                                        Masculino
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sexo" id="gridRadios2" value="Femenino"   @if ($errors->has('sexo')) is-invalid @endif>
                                    <label class="form-check-label" for="gridRadios2">
                                        Femenino
                                    </label>
                                </div>
                                @if ($errors->has('sexo'))
                                    @foreach ($errors->get('sexo') as $error)
                                        <h6 style="color: red">
                                            <blockquote>{{ $error }}</blockquote>
                                        </h6>
                                    @endforeach
                                @endif
                            </div>
                        </fieldset>
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Area*</legend>
                            <div class="col-sm-10">
                                <select class="form-select" name="area">
                                    <option selected value="administracion">Administracion</option>
                                    <option value="produccion">Produccion</option>
                                    <option value="ventas">Ventas</option>
                                </select>
                            </div>
                        </fieldset>
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Descripcion*</legend>
                            <div class="col-sm-10">
                                <textarea placeholder="Descripcion de le experiencia del empleado" class="form-control" id="descripcion" rows="4" name="descripcion"  @if ($errors->has('descripcion')) is-invalid @endif></textarea>
                                @if ($errors->has('descripcion'))
                                    @foreach ($errors->get('descripcion') as $error)
                                        <h6 style="color: red">
                                            <blockquote>{{ $error }}</blockquote>
                                        </h6>
                                    @endforeach
                                @endif
                            </div>
                        </fieldset>
                        <div class="row mb-3">
                            <div class="col-sm-10 offset-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1" name="boletin">
                                    <label class="form-check-label" for="gridCheck1">
                                        Deseo recibir boletin informativo
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Roles*</legend>
                            <div class="col-sm-10">
                            <div class="form-check">
                                <input name="roles" class="form-check-input" type="checkbox" id="checkdesarrollador" value="Desarrollador">
                                <label class="form-check-label" for="checkdesarrollador">
                                    Profesional de proyectos - Desarrollador
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="roles" class="form-check-input" type="checkbox" id="checkgerente" value="Gerente">
                                <label class="form-check-label" for="checkgerente">
                                    Gerente estrategico
                                </label>
                            </div>
                              <div class="form-check">
                                <input name="roles" class="form-check-input" type="checkbox" id="checkauxiliar" value="Auxiliar">
                                <label class="form-check-label" for="checkauxiliar">
                                    Auxiliar administrtivo
                                </label>
                              </div>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                      </form>
                </div>
            </div>
        </div>
    </body>
</html>
