<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Formulario Fonasa DEV</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <span class="navbar-text">
                Formulario Fonasa DESARROLLO
            </span>
        </div>
    </nav>

    <!-- Creacion de Formulario de Contacto -->
    <form action="{{ route('formulario') }}" method="POST">
        @csrf
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <span class="input-group-text" for="tiposolicitud">Tipo de solicitud</span>
                    <select id="tiposolicitud" name="tiposolicitud" class="form-control">
                        <option value="Afilacion">Afilacion</option>
                        <option value="Actualizacion Antecedentes">Actualizacion Antecedentes</option>
                        <option value="Incorporacion o Eliminacion Cargas">Incorporacion o Eliminacion Cargas Familiares</option>
                        <option value="Modificacion de Empleador">Modificacion de Empleador</option>
                        <option value="Cambio de Situacion Laboral">Cambio de Situacion Laboral</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <p class=h3>Datos Asegurado</p>
                            <div class=input-group>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                            </div>
                            <div class=input-group>
                                <input type="text" class="form-control" id="apellidopaterno" name="apellidopaterno" placeholder="Apellido Paterno">
                                <input type="text" class="form-control" id="apellidomaterno" name="apellidomaterno" placeholder="Apellido Materno">
                            </div>

                            <div class=input-group>
                                <input type="text" class="form-control" id="rut" name="rut" placeholder="Rut">
                                <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" placeholder="Nacionalidad">
                            </div>

                            <div class=input-group>
                                <span class="input-group-text">Fecha Nacimiento</span>
                                <input type="date" class="form-control" id="fechanacimiento" name="fechanacimiento" placeholder="Fecha Nacimiento">
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <p class=h3>Datos de Contacto</p>
                            <div class=input-group>
                                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion">
                            </div>
                            <div class=input-group>
                                <input type="text" class="form-control" id="comuna" name="comuna" placeholder="Comuna">
                            </div>
                            <div class=input-group>
                                <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad">
                                <input type="text" class="form-control" id="region" name="region" placeholder="Region">
                            </div>

                            <div class="form-group">
                                <span class="input-group-text" for="tipodepropiedad">Tipo de Propiedad</span>
                                <select id="tipodepropiedad" name="tipodepropiedad" class="form-control">
                                    <option value="Propia Pagada">Propia Pagada</option>
                                    <option value="Propia Con Deuda">Propia Con Deuda</option>
                                    <option value="Arrendada">Arrendada</option>
                                    <option value="Allegado">Allegado</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                            <div class=input-group>
                                <span class="input-group-text">Email</span>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class=input-group>
                                <span class="input-group-text">Telefono</span>
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label from="mensaje">Mensaje</label>
                    <textarea class="form-control" id="mensaje" name="mensaje" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>