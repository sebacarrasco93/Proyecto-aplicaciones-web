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
    @include('partials.navbarForm')
    <!-- Creacion de Formulario de Contacto -->
    <form action="{{ route('formulario') }}" class="needs-validation" method="POST" novalidate>
        @csrf
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <label for="" class="col-form-label">Tipo de Solicitud</label>
                    <select id="tiposolicitud" name="tiposolicitud" class="form-select" required>
                        <option selected disabled value="">Seleccione una opción</option>
                        <option value="Afilacion">Afilacion</option>
                        <option value="Actualizacion Antecedentes">Actualizacion Antecedentes</option>
                        <option value="Incorporacion o Eliminacion Cargas">Incorporacion o Eliminacion Cargas Familiares</option>
                        <option value="Modificacion de Empleador">Modificacion de Empleador</option>
                        <option value="Cambio de Situacion Laboral">Cambio de Situacion Laboral</option>
                    </select>
                    <div class="invalid-feedback">
                        Por favor seleccione una opción
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <p class=h3>Datos Asegurado</p>
                            <div class=input-group>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                                <div class="invalid-feedback">
                                    Por favor ingrese un nombre
                                </div>
                            </div>
                            <div class=input-group>
                                <input type="text" class="form-control" id="apellidopaterno" name="apellidopaterno" placeholder="Apellido Paterno" required>
                                <input type="text" class="form-control" id="apellidomaterno" name="apellidomaterno" placeholder="Apellido Materno" required>
                                <div class="invalid-feedback">
                                    Por favor ingrese sus apellidos
                                </div>
                            </div>

                            <div class=input-group>
                                <input type="text" class="form-control" id="rut" name="rut" placeholder="Rut" required>
                                <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" placeholder="Nacionalidad" required>
                                <div class="invalid-feedback">
                                    Por favor rellene todos los campos
                                </div>
                            </div>

                            <div class=input-group>
                                <span class="input-group-text">Fecha Nacimiento</span>
                                <input type="date" class="form-control" id="fechanacimiento" name="fechanacimiento" placeholder="Fecha Nacimiento" required>
                                <select id="sexo" name="sexo" class="form-select" required>
                                    <option selected disabled value="">Seleccione su Sexo</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                                <div class="invalid-feedback">
                                    Por favor ingrese su fecha de nacimiento y sexo
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Segunda columna -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <p class=h3>Datos de Contacto</p>
                            <div class=input-group>
                                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required>
                                <div class="invalid-feedback">
                                    Por favor ingrese su direccion
                                </div>
                            </div>
                            <div class=input-group>
                                <input type="text" class="form-control" id="comuna" name="comuna" placeholder="Comuna" required>
                                <div class="invalid-feedback">
                                    Por favor ingrese su comuna
                                </div>
                            </div>
                            <div class=input-group>
                                <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad" required>
                                <select class="form-select" id="region" name="region" required>
                                    <option selected disabled value="">Region</option>
                                    <option value="I">I. Tarapacá</option>
                                    <option value="II">II. Antofagasta </option>
                                    <option value="III">III. Atacama</option>
                                    <option value="IV">IV. Coquimbo</option>
                                    <option value="V">V. Valparaíso</option>
                                    <option value="VI">VI. O'Higgins</option>
                                    <option value="VII">VII. Maule</option>
                                    <option value="VIII">VIII. Bío Bío</option>
                                    <option value="IX">IX. Araucanía</option>
                                    <option value="X">X. Los Lagos</option>
                                    <option value="XI">XI. Aysén</option>
                                    <option value="XII">XII. Magallanes</option>
                                    <option value="RM">RM. Santiago</option>
                                    <option value="XIV">XIV. Los Ríos</option>
                                    <option value="XV">XV. Arica y Parinacota</option>
                                    <option value="XVI">XVI. Ñuble</option>
                                </select>
                                <div class="invalid-feedback">
                                    Por favor ingrese su ciudad y region
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <select id="tipodepropiedad" name="tipodepropiedad" class="form-select" required>
                                <option selected disabled value="">Tipo de Propiedad</option>
                                <option value="Propia Pagada">Propia Pagada</option>
                                <option value="Propia Con Deuda">Propia Con Deuda</option>
                                <option value="Arrendada">Arrendada</option>
                                <option value="Allegado">Allegado</option>
                                <option value="Otro">Otro</option>
                            </select>
                            <div class="invalid-feedback">
                                Por favor seleccione una opción
                            </div>
                        </div>
                        <div class=input-group>
                            <span class="input-group-text">Email</span>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class=input-group>
                            <span class="input-group-text">Telefono</span>
                            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
                        </div>
                        <!-- Radio Button Concentimiento Fonasa -->
                        <div class="row mb-6">
                            <div class="col-md-11">
                                <label for="concentimiento" class="form-label">Autorizo a Fonasa para que envíe información a mi email y/o telefono celular :</label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="concentimiento" class="form-check-input" id="acepto" value="1">
                                    <label for="si" class="form-check-label">Si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="concentimiento" class="form-check-input" id="rechazo" value="0">
                                    <label for="no" class="form-check-label">No</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
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