<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Formulario Fonasa DEV</title>
</head>

<body>
    <h1 class="align-text-top text-center">Mockup Formulario Fonasa</h1>

    <!-- Creacion de Formulario de Contacto -->
    <form action="{{ route('formulario') }}" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <p class=h3>Datos Asegurado</p>
                        <div class=input-group>
                            <span class="input-group-text">Nombre</span>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                        </div>
                        <div class=input-group>
                            <span class="input-group-text">Apellidos</span>
                            <input type="text" class="form-control" id="apellidopaterno" name="apellidopaterno" placeholder="Apellido Paterno">
                            <input type="text" class="form-control" id="apellidomaterno" name="apellidomaterno" placeholder="Apellido Materno">
                        </div>

                        <p class="h5">Fecha nacimiento, Rut, Nacionalidad</p>
                        <div class=input-group>
                            <span class="input-group-text">Rut</span>
                            <input type="text" class="form-control" id="rut" name="rut" placeholder="Rut">
                        </div>
                        <div class=input-group>
                            <span class="input-group-text">Nacionalidad</span>
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
                            <span class="input-group-text">Direccion</span>
                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion">
                        </div>
                        <div class=input-group>
                            <span class="input-group-text">Comuna</span>
                            <input type="text" class="form-control" id="comuna" name="comuna" placeholder="Comuna">
                        </div>
                        <div class=input-group>
                            <span class="input-group-text">Ciudad</span>
                            <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad">
                        </div>
                        <div class=input-group>
                            <span class="input-group-text">Region</span>
                            <input type="text" class="form-control" id="region" name="region" placeholder="Region">
                        </div>

                        <div class="form-group">
                            <label for="tipodepropiedad">Selecione El Tipo de Propiedad:</label>
                            <select class="form-control" id="tipodepropiedad">
                                <option>Propia Pagada</option>
                                <option>Propia Con Deuda</option>
                                <option>Arrendada</option>
                                <option>Allegado</option>
                                <option>Otro</option>
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