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
                        <p class=h5>Nombre y Apellidos</p>
                        <label for="Apellido Paterno">Paterno</label>
                        <input type="text" class="form-control" id="apellidopaterno" name="Apellido Paterno" placeholder="ApellidoPaterno">
                        <label for="Apellido Materno">Materno</label>
                        <input type="text" class="form-control" id="apellidomaterno" name="Apellido Materno" placeholder="ApellidoMaterno">
                        <label for="Nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="Nombre" placeholder="Nombre">
                        <p class="h5">Fecha nacimiento, Rut, Nacionalidad</p>
                        <label for="RUT">Rut</label>
                        <input type="text" class="form-control" id="rut" name="rut" placeholder="Rut">
                        <label for="Nacionalidad">Nacionalidad</label>
                        <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" placeholder="Nacionalidad">
                        <label for="Fecha Nacimiento">Fecha Nacimiento</label>
                        <input type="date" class="form-control" id="fechanacimiento" name="fechanacimiento" placeholder="Fecha Nacimiento">
                    </div>

                    <div class="form-group">
                    </div>

                    <div class="form-group">
                        <p class=h3>Datos de Contacto</p>
                        <label for="Direccion">Direccion</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion">
                        <label for="Comuna">Comuna</label>
                        <input type="text" class="form-control" id="comuna" name="comuna" placeholder="Comuna">
                        <label for="Ciudad">Ciudad</label>
                        <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad">
                        <label for="Region">Region</label>
                        <input type="text" class="form-control" id="region" name="region" placeholder="Region">
                        <Label for="Tipo de Propiedad">Tipo de Propiedad</Label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="PropiaPagada" id="propiapagada" value="Propia Pagada">
                            <label class="form-check-label" for="propiapagada">Propia Pagada</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="PropiaConDeuda" id="propiacondeuda" value="Propia Con Deuda">
                            <label class="form-check-label" for="PropiaConDeuda">Propia Con Deuda</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Arrendada" id="arrendada" value="Arrendada">
                            <label class="form-check-label" for="arrendada">Arrendada</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Allegado" id="allegado" value="Allegado">
                            <label class="form-check-label" for="allegado">Allegado</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Otro" id="otro" value="Otro">
                            <label class="form-check-label" for="otro">Otro</label>
                        </div>

                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
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