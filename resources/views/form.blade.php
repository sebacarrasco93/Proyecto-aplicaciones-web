<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Fonasa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="{{ asset('js/fonasa.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }

    .espaciado {
        margin-bottom: 10px;
    }

</style>

<body>
    <!-- Creacion de Formulario de Contacto -->
    @include('partials.navbarForm')
    <form action="{{ route('formulario') }}" class="needs-validation" method="POST" novalidate>
        @csrf
        <div class="container">
            <div class="col-md-8 offset-md-2" style="text-align:center; padding:0.5em 0">
                <img src="/img/%c3%adndice.png">
            </div>
            <div class="col-md-8 offset-md-2">
                <p class=h4>Tipo de Solicitud</p>
                <hr>
                <select id="tiposolicitud" name="tiposolicitud" class="form-select" required>
                    <option selected disabled value="">Seleccione una opción</option>
                    <option value="Afilacion">Afilacion</option>
                    <option value="Actualizacion Antecedentes">Actualizacion Antecedentes</option>
                    <option value="Incorporacion o Eliminacion Cargas">Incorporacion o Eliminacion Cargas Familiares
                    </option>
                    <option value="Modificacion de Empleador">Modificacion de Empleador</option>
                    <option value="Cambio de Situacion Laboral">Cambio de Situacion Laboral</option>
                </select>
                <div class="invalid-feedback">
                    Por favor seleccione una opción
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <p class=h4>Datos Asegurado</p>
                    <hr>
                    <div class="form-group espaciado">
                        <div class="input-group espaciado">
                            <input type="text" class="form-control" id="user_name" name="user_name"
                                placeholder="Nombre" required>
                            <div class="invalid-feedback">
                                Por favor ingrese un nombre
                            </div>
                        </div>
                        <div class="input-group espaciado">
                            <input type="text" class="form-control" id="apellidopaterno" name="apellidopaterno"
                                placeholder="Apellido Paterno" required>
                            <div class="invalid-feedback">
                                Por favor ingrese sus apellidos
                            </div>
                        </div>

                        <div class="input-group espaciado">
                            <input type="text" class="form-control" id="apellidomaterno" name="apellidomaterno"
                                placeholder="Apellido Materno" required>
                            <div class="invalid-feedback">
                                Por favor ingrese sus apellidos
                            </div>
                        </div>

                        <div class="input-group espaciado">
                            <input type="text" class="form-control" id="user_dni" name="user_dni" placeholder="Rut"
                                required>
                            <div class="invalid-feedback">
                                Por favor rellene todos los campos
                            </div>
                        </div>

                        <div class="input-group espaciado">
                            <input type="text" class="form-control" id="nacionalidad" name="nacionalidad"
                                placeholder="Nacionalidad" required>
                            <div class="invalid-feedback">
                                Por favor rellene todos los campos
                            </div>
                        </div>

                        <div class="input-group espaciado">
                            <span class="input-group-text">Fecha Nacimiento</span>
                            <input type="date" class="form-control" id="fechanacimiento" name="fechanacimiento"
                                placeholder="Fecha Nacimiento" required>
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
                    <hr>
                </div>
            </div>
            <!-- Segunda columna -->

            <div class="col-md-8 offset-md-2">
                <p class=h4>Datos de Contacto</p>
                <hr>
                <div class="form-group espaciado">
                    <div class="input-group espaciado">
                        <input type="text" class="form-control" id="user_address" name="user_address"
                            placeholder="Direccion" required>
                        <div class="invalid-feedback">
                            Por favor ingrese su direccion
                        </div>
                    </div>
                    <div class="input-group espaciado">
                        <input type="text" class="form-control" id="comuna" name="comuna" placeholder="Comuna"
                            required>
                        <div class="invalid-feedback">
                            Por favor ingrese su comuna
                        </div>
                    </div>
                    <div class="input-group espaciado">
                        <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad"
                            required>
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

                <div class="form-group espaciado">
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
                <div class="input-group espaciado">
                    <span class="input-group-text">Email</span>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="input-group espaciado">
                    <span class="input-group-text">Telefono</span>
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
                </div>
                <!-- Radio Button Concentimiento Fonasa -->
                <div class="offset-md-1">
                    <label for="concentimiento" class="form-label">Autorizo a Fonasa para que envíe información a mi
                        email y/o telefono celular :</label>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="concentimiento" class="form-check-input" id="acepto" value="1">
                        <label for="si" class="form-check-label">Si</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="concentimiento" class="form-check-input" id="rechazo" value="0">
                        <label for="no" class="form-check-label">No</label>
                    </div>
                </div>
                <hr>
            </div>
            <!-- Tercera Columna -->
            <div class="col-md-8 offset-md-2">
                <p class=h4>Tipo de Asegurado</p>
                <hr>
                <div class="form-group espaciado">
                    <div class="input-group espaciado">
                        <select id="tipoasegurado" name="tipoasegurado" class="form-select" required>
                            <option selected disabled value="">Tipo de Asegurado</option>
                            <option value="Dep_CIndefinido">Contrato Indefinido</option>
                            <option value="Dep_CPlazoFijo">Contrato a plazo fijo</option>
                            <option value="Dep_CFaenaObra">Contrato por obra o faena</option>
                            <option value="Dep_CTurnoJornada">Contrato por turno o jornada</option>
                            <option value="Dep_TrabajadorPensionadoSalud">Trabajador o pensionado del sector salud
                            </option>
                            <option value="Independiente">Independiente</option>
                            <option value="Cesante_SubsidioCesantia">Cesante Subsidio Cesantia</option>
                            <option value="Cesante_SeguroDesempleo">Cesante seguro desempleo</option>
                        </select>
                        <div class="invalid-feedback">
                            Por favor seleccione una opción
                        </div>
                    </div>
                    <div class="input-group espaciado">
                        <select id="pensionado" name="pensionado" class="form-select" onchange="verPension()">
                            <option selected disabled value="">Pensionado</option>
                            <option value="No_Pensionado">No Soy Pensionado</option>
                            <option value="Vejez">Vejez</option>
                            <option value="Viudez">Viudez</option>
                            <option value="Orfandad">Orfandad</option>
                            <option value="Invalidez">Invalidez</option>
                            <option value="En_Tramite">Pension en Tramite</option>
                        </select>
                    </div>
                    <hr>
                </div>
                <!-- Cuarta Columna -->
                <p class=h4>Informacion Empleador</p>
                <hr>
                <div class="row">
                    <div class="col-mb-4">
                        <div class="input-group espaciado">
                            <div class="form-floating col col-sm-4 ">
                                <input type="text" class="form-control" id="Emp_rut" name="rut" placeholder="Rut">
                                <label for="Emp_rut">Rut</label>
                            </div>
                            <div class="form-floating col col-sm-4">
                                <input type="text" class="form-control" id="Emp_nombre" name="nombre"
                                    placeholder="Nombre">
                                <label for="Emp_nombre">Nombre o Razon Social</label>
                            </div>
                            <div class="form-floating col col-sm-4">
                                <input type="text" class="form-control" id="Emp_tel" name="Telefono"
                                    placeholder="Telefono">
                                <label for="Emp_tel">Telefono</label>
                            </div>
                        </div>
                        <!-- Direccion larga por tema estetico para escritura -->
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="Emp_direccion" name="direccion"
                                placeholder="Direccion">
                            <label for="Emp_direccion">Direccion</label>
                        </div>
                        <!-- Continuacion Formulario -->
                        <div class="input-group espaciado">
                            <div class="form-floating col-4 col-sm-4">
                                <input type="number" class="form-control" id="Emp_RentaMensual"
                                    name="Renta Imponible Mensual" placeholder="Renta Imponible Mensual">
                                <label for="Emp_RentaMensual">Renta Imp. Mensual</label>
                            </div>
                            <div class="form-floating col col-sm-4">
                                <input type="date" class="form-control" id="Emp_ContratoInicio"
                                    name="Inicio Vigencia Contrato" placeholder="Inicio Vigencia Contrato">
                                <label for="Emp_ContratoInicio">Inicio Contrato</label>
                            </div>
                            <div class="form-floating col col-sm-4">
                                <input type="date" class="form-control" id="Emp_ContratoTermino"
                                    name="Termino Vigencia Contrato" placeholder="Termino Vigencia Contrato">
                                <label for="Emp_ContratoTermino">Termino Contrato</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <fieldset hidden id=pensionSi>
                        <p class=h4>Institucion Pagadora Pension</p>
                        <div class="input-group espaciado">
                            <select id="pagadorapension" name="pagadorapension" class="form-select">
                                <option selected disabled value="0">Seleccione Su Institucion</option>
                                <option value="IPS">IPS</option>
                                <option value="AFP">AFP</option>
                                <option value="CiaSeguros">Cia de Seguros</option>
                                <option value="Mutual">Mutual</option>
                            </select>
                        </div>
                        <div class="row mb-3">
                            <div class="col-mb-4">
                                <div class="input-group espaciado">
                                    <div class="form-floating col col-sm-4 ">
                                        <input type="text" class="form-control" id="Emp2_rut" name="rut"
                                            placeholder="Rut123">
                                        <label for="Emp2_rut">Rut</label>
                                    </div>
                                    <div class="form-floating mb-3 mt-3">
                                        <input type="text" class="form-control" id="Emp2_nombre" name="nombre"
                                            placeholder="Nombre">
                                        <label for="Emp2_nombre">Nombre o Razon Social</label>
                                    </div>
                                    <div class="form-floating mb-3 mt-3">
                                        <input type="text" class="form-control" id="Emp2_tel" name="Telefono"
                                            placeholder="Telefono">
                                        <label for="Emp2_tel">Telefono</label>
                                    </div>
                                </div>
                                <!-- Direccion larga por tema estetico para escritura -->
                                <div class="form-floating col col-sm-4 ">
                                    <input type="text" class="form-control" id="Emp2_direccion" name="direccion"
                                        placeholder="Direccion">
                                    <label for="Emp2_direccion">Direccion</label>
                                </div>
                                <!-- Continuacion Formulario -->
                                <div class="input-group espaciado">
                                    <div class="form-floating mb-3 mt-3">
                                        <input type="number" class="form-control" id="Emp2_RentaMensual"
                                            name="Renta Imponible Mensual" placeholder="Renta Imponible Mensual">
                                        <label for="Emp2_RentaMensual">Renta Imp. Mensual</label>
                                    </div>
                                    <div class="form-floating mb-3 mt-3">
                                        <input type="date" class="form-control" id="Emp2_ContratoInicio"
                                            name="Inicio Vigencia Contrato" placeholder="Inicio Vigencia Contrato">
                                        <label for="Emp2_ContratoInicio">Inicio Contrato</label>
                                    </div>
                                    <div class="form-floating mb-3 mt-3">
                                        <input type="date" class="form-control" id="Emp2_ContratoTermino"
                                            name="Termino Vigencia Contrato" placeholder="Termino Vigencia Contrato">
                                        <label for="Emp2_ContratoTermino">Termino Contrato</label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                    </fieldset>

                    <!--<div class="row mb-3">
                            <label for="rentfinal">Total de ingresos $ <input type="number" id="rentfinal"></label>
                        </div>-->
                    <p class=h4>Cargas Familiares</p>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="cantCargas" class="form-label">Indique Cuantas Cargas Tiene</label>
                            <select class="form-select" id="cantCargas" onchange="cargas()">
                                <option value="0">No Tengo Cargas</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <fieldset hidden id="carga1">
                        <div class="row mb-3">
                            <div class="input-group espaciado">
                                <div class="form-floating mb-3 mt-3">
                                    <input type="number" class="form-control" id="carRut" name="carRut"
                                        placeholder="carRut">
                                    <label for="carRut">Rut</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="carApellido" name="carApellido"
                                        placeholder="carApellido">
                                    <label for="carApellido">Apellido</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="carNombre" name="carNombre"
                                        placeholder="carNombre">
                                    <label for="carNombre">Nombre</label>
                                </div>
                                <div class="form-floating mb-4 mt-3">
                                    <input type="date" class="form-control" id="carNac" name="carNac"
                                        placeholder="Fecha Nacimiento">
                                    <label for="carNac">Nacimiento</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <select id="carSexo" name="carSexo" class="form-select">
                                        <option selected disabled value="0">Sexo</option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                        <option value="O">Prefiero No Decirlo</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <select class="form-select" id="Parentesco">
                                        <option selected disabled value="">Seleccione Parentesco</option>
                                        <option value="Conyuge">Conyuge</option>
                                        <option value="Ascendiente">Ascendiente</option>
                                        <option value="Descendiente">Descendiente</option>
                                        <option value="Hijo_Discapacitado">Hijo con discapacidad</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </fieldset>

                    <fieldset hidden id="carga2">
                        <div class="row mb-3">
                            <div class="input-group espaciado">
                                <div class="form-floating mb-3 mt-3">
                                    <input type="number" class="form-control" id="carRut2" name="carRut2"
                                        placeholder="carRut2">
                                    <label for="carRut2">Rut</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="carApellido2" name="carApellido2"
                                        placeholder="carApellido2">
                                    <label for="carApellido2">Apellido</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="carNombre2" name="carNombre2"
                                        placeholder="carNombre2">
                                    <label for="carNombre2">Nombre</label>
                                </div>
                                <div class="form-floating mb-4 mt-3">
                                    <input type="date" class="form-control" id="carNac2" name="carNac2"
                                        placeholder="Fecha Nacimiento2">
                                    <label for="carNac2">Nacimiento</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <select id="carSexo2" name="carSexo2" class="form-select">
                                        <option selected disabled value="0">Sexo</option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                        <option value="O">Prefiero No Decirlo</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <select class="form-select" id="CarPar2">
                                        <option selected disabled value="">Seleccione Parentesco</option>
                                        <option value="Conyuge">Conyuge</option>
                                        <option value="Ascendiente">Ascendiente</option>
                                        <option value="Descendiente">Descendiente</option>
                                        <option value="Hijo_Discapacitado">Hijo con discapacidad</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </fieldset>

                    <fieldset hidden id="carga3">
                        <div class="row mb-3">
                            <div class="input-group espaciado">
                                <div class="form-floating mb-3 mt-3">
                                    <input type="number" class="form-control" id="carRut3" name="carRut3"
                                        placeholder="carRut3">
                                    <label for="carRut3">Rut</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="carApellido3" name="carApellido3"
                                        placeholder="carApellido3">
                                    <label for="carApellido3">Apellido</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="carNombre3" name="carNombre3"
                                        placeholder="carNombre3">
                                    <label for="carNombre3">Nombre</label>
                                </div>
                                <div class="form-floating mb-4 mt-3">
                                    <input type="date" class="form-control" id="carNac3" name="carNac3"
                                        placeholder="Fecha Nacimiento3">
                                    <label for="carNac3">Nacimiento</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <select id="carSexo3" name="carSexo3" class="form-select">
                                        <option selected disabled value="0">Sexo</option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                        <option value="O">Prefiero No Decirlo</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <select class="form-select" id="CarPar3">
                                        <option selected disabled value="">Seleccione Parentesco</option>
                                        <option value="Conyuge">Conyuge</option>
                                        <option value="Ascendiente">Ascendiente</option>
                                        <option value="Descendiente">Descendiente</option>
                                        <option value="Hijo_Discapacitado">Hijo con discapacidad</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </fieldset>

                    <fieldset hidden id="carga4">
                        <div class="row mb-3">
                            <div class="input-group espaciado">
                                <div class="form-floating mb-3 mt-3">
                                    <input type="number" class="form-control" id="carRut4" name="carRut4"
                                        placeholder="carRut4">
                                    <label for="carRut4">Rut</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="carApellido4" name="carApellido4"
                                        placeholder="carApellido4">
                                    <label for="carApellido4">Apellido</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="carNombre4" name="carNombre4"
                                        placeholder="carNombre4">
                                    <label for="carNombre4">Nombre</label>
                                </div>
                                <div class="form-floating mb-4 mt-3">
                                    <input type="date" class="form-control" id="carNac4" name="carNac4"
                                        placeholder="Fecha Nacimiento4">
                                    <label for="carNac4">Nacimiento</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <select id="carSexo4" name="carSexo4" class="form-select">
                                        <option selected disabled value="0">Sexo</option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                        <option value="O">Prefiero No Decirlo</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <select class="form-select" id="CarPar4">
                                        <option selected disabled value="">Seleccione Parentesco</option>
                                        <option value="Conyuge">Conyuge</option>
                                        <option value="Ascendiente">Ascendiente</option>
                                        <option value="Descendiente">Descendiente</option>
                                        <option value="Hijo_Discapacitado">Hijo con discapacidad</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </fieldset>

                    <fieldset hidden id="carga5">
                        <div class="row mb-3">
                            <div class="input-group espaciado">
                                <div class="form-floating mb-3 mt-3">
                                    <input type="number" class="form-control" id="carRut5" name="carRut5"
                                        placeholder="carRut5">
                                    <label for="carRut5">Rut</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="carApellido5" name="carApellido5"
                                        placeholder="carApellido5">
                                    <label for="carApellido5">Apellido</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="carNombre5" name="carNombre5"
                                        placeholder="carNombre5">
                                    <label for="carNombre5">Nombre</label>
                                </div>
                                <div class="form-floating mb-4 mt-3">
                                    <input type="date" class="form-control" id="carNac5" name="carNac5"
                                        placeholder="Fecha Nacimiento5">
                                    <label for="carNac5">Nacimiento</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <select id="carSexo5" name="carSexo5" class="form-select">
                                        <option selected disabled value="0">Sexo</option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                        <option value="O">Prefiero No Decirlo</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <select class="form-select" id="CarPar5">
                                        <option selected disabled value="">Seleccione Parentesco</option>
                                        <option value="Conyuge">Conyuge</option>
                                        <option value="Ascendiente">Ascendiente</option>
                                        <option value="Descendiente">Descendiente</option>
                                        <option value="Hijo_Discapacitado">Hijo con discapacidad</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <hr>
                    <P class=h4>Establecimientos Publicos de Salud</h4>
                    <div class="row mb-3">
                        <div class="col-md-8">
                            <label for="establecimientoInscrito" class="form-label">¿Esta inscrito en algun
                                establecimiento público de salud?</label>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="inscrito" class="form-check-input" id="EstabIns" value="1"
                                    onclick="showEstabSi()">
                                <label for="EstabIns" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="inscrito" class="form-check-input" id="EstabIns" value="0"
                                    onclick="showEstabNo()">
                                <label for="EstabIns" class="form-check-label">No</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <fieldset hidden id=estabSalud>
                        <p class=h4>Informe Su Establecimiento</p>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="establecimiento" class="form-label">Cual:</label>
                                <input type="text" class="form-control" id="establecimiento">
                            </div>
                            <div class="col-md-3">
                                <label for="comuna" class="form-label">Comuna</label>
                                <input type="text" class="form-control" id="establecimientoComuna">
                            </div>
                            <div class="col-md-3">
                                <label for="" class="form-label">Región</label>
                                <select class="form-select" id="establecimeintoRegion">
                                    <option value="">Seleccionar</option>
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
                            </div>
                        </div>
                        <hr>
                    </fieldset>
                    <div class="row">
                        <div class="form-group espaciado">
                            <label from="mensaje">Declaracion Jurada</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
