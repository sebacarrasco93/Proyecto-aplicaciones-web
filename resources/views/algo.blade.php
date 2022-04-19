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
            <div class="col-md-8 offset-md-2">
                <p class=h4>Tipo de Solicitud</p>
                <hr>
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
                <hr>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <p class=h4>Datos Asegurado</p>
                    <hr>
                    <div class="form-group">
                        <div class=input-group>
                            <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Nombre" required>
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
                            <input type="text" class="form-control" id="user_dni" name="user_dni" placeholder="Rut" required>
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
                    <hr>
                </div>
            </div>
            <!-- Segunda columna -->

            <div class="col-md-8 offset-md-2">
                <p class=h4>Datos de Contacto</p>
                <hr>
                <div class="form-group">
                    <div class=input-group>
                        <input type="text" class="form-control" id="user_address" name="user_address" placeholder="Direccion" required>
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
                <div class="offset-md-1">
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
                <hr>
            </div>
            <!-- Tercera Columna -->
            <div class="col-md-8 offset-md-2">
                <p class=h4>Tipo de Asegurado</p>
                <hr>
                <div class="form-group">
                    <div class=input-group>
                        <select id="tipoasegurado" name="tipoasegurado" class="form-select" required>
                            <option selected disabled value="">Tipo de Asegurado</option>
                            <option value="Dep_CIndefinido">Contrato Indefinido</option>
                            <option value="Dep_CPlazoFijo">Contrato a plazo fijo</option>
                            <option value="Dep_CFaenaObra">Contrato por obra o faena</option>
                            <option value="Dep_CTurnoJornada">Contrato por turno o jornada</option>
                            <option value="Dep_TrabajadorPensionadoSalud">Trabajador o pensionado del sector salud</option>
                            <option value="Independiente">Independiente</option>
                            <option value="Cesante_SubsidioCesantia">Cesante Subsidio Cesantia</option>
                            <option value="Cesante_SeguroDesempleo">Cesante seguro desempleo</option>
                        </select>
                        <div class="invalid-feedback">
                            Por favor seleccione una opción
                        </div>
                    </div>
                    <div class=input-group>
                        <select id="pensionado" name="pensionado" class="form-select">
                            <option selected disabled value="">Pensionado</option>
                            <option value="Vejez">Vejez</option>
                            <option value="Viudez">Viudez</option>
                            <option value="Orfandad">Orfandad</option>
                            <option value="Invalidez">Invalidez</option>
                            <option value="En Tramite">Pension en Tramite</option>
                        </select>
                    </div>
                    <div class=input-group>
                        <select id="pagadorapension" name="pagadorapension" class="form-select">
                            <option selected disabled value="">Institucion Pagadora Pension</option>
                            <option value="IPS">IPS</option>
                            <option value="AFP">AFP</option>
                            <option value="CiaSeguros">Cia de Seguros</option>
                            <option value="Mutual">Mutual</option>
                        </select>
                        <div class="invalid-feedback">
                            Por favor seleccione una opción
                        </div>
                    </div>
                    <hr>
                </div>
                <!-- Cuarta Columna -->
                <p class=h4>Informacion Empleador o Institucion Pagadora de Pension</p>
                <hr>
                <div class="row mb-3">
                    <div class="col-mb-4">
                        <div class=input-group>
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control" id="Emp_rut" name="rut" placeholder="Rut">
                                <label for="Emp_rut">Rut</label>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control" id="Emp_nombre" name="nombre" placeholder="Nombre">
                                <label for="Emp_nombre">Nombre o Razon Social</label>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control" id="Emp_tel" name="Telefono" placeholder="Telefono">
                                <label for="Emp_tel">Telefono</label>
                            </div>
                        </div>
                        <!-- Direccion larga por tema estetico para escritura -->
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="Emp_direccion" name="direccion" placeholder="Direccion">
                            <label for="Emp_direccion">Direccion</label>
                        </div>
                        <!-- Continuacion Formulario -->
                        <div class=input-group>
                            <div class="form-floating mb-3 mt-3">
                                <input type="number" class="form-control" id="Emp_RentaMensual" name="Renta Imponible Mensual" placeholder="Renta Imponible Mensual">
                                <label for="Emp_RentaMensual">Renta Imp. Mensual</label>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <input type="date" class="form-control" id="Emp_ContratoInicio" name="Inicio Vigencia Contrato" placeholder="Inicio Vigencia Contrato">
                                <label for="Emp_ContratoInicio">Inicio Contrato</label>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <input type="date" class="form-control" id="Emp_ContratoTermino" name="Termino Vigencia Contrato" placeholder="Termino Vigencia Contrato">
                                <label for="Emp_ContratoTermino">Termino Contrato</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-mb-4">
                            <div class=input-group>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="Emp2_rut" name="rut" placeholder="Rut">
                                    <label for="Emp2_rut">Rut</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="Emp2_nombre" name="nombre" placeholder="Nombre">
                                    <label for="Emp2_nombre">Nombre o Razon Social</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="Emp2_tel" name="Telefono" placeholder="Telefono">
                                    <label for="Emp2_tel">Telefono</label>
                                </div>
                            </div>
                            <!-- Direccion larga por tema estetico para escritura -->
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control" id="Emp2_direccion" name="direccion" placeholder="Direccion">
                                <label for="Emp2_direccion">Direccion</label>
                            </div>
                            <!-- Continuacion Formulario -->
                            <div class=input-group>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="number" class="form-control" id="Emp2_RentaMensual" name="Renta Imponible Mensual" placeholder="Renta Imponible Mensual">
                                    <label for="Emp2_RentaMensual">Renta Imp. Mensual</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="date" class="form-control" id="Emp2_ContratoInicio" name="Inicio Vigencia Contrato" placeholder="Inicio Vigencia Contrato">
                                    <label for="Emp2_ContratoInicio">Inicio Contrato</label>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="date" class="form-control" id="Emp2_ContratoTermino" name="Termino Vigencia Contrato" placeholder="Termino Vigencia Contrato">
                                    <label for="Emp2_ContratoTermino">Termino Contrato</label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!--<div class="row mb-3">
                            <label for="rentfinal">Total de ingresos $ <input type="number" id="rentfinal"></label>
                        </div>-->
                        <p class=h4>MATENME</p>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="cantCargas" class="form-label">Si tiene cargas familiares indique cuantas, en caso que no tenga pase a al siguiente pregunta</label>
                                <select class="form-select" id="cantCargas">
                                    <option value="">Seleccionar</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div id="carga1">
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="carRut" class="form-label">Rut</label>
                                    <input type="number" class="form-control" id="carRut">
                                </div>
                                <div class="col-md-4">
                                    <label for="carApellido" class="form-label">Apellidos</label>
                                    <input type="text" class="form-control" id="carApellido">
                                </div>
                                <div class="col-md-4">
                                    <label for="carNombre" class="form-label">Nombres</label>
                                    <input type="text" class="form-control" id="carNombre">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="carNac" class="form-label">Fecha Nacimiento</label>
                                    <input type="date" class="form-control" placeholder="dd-mm-yyyy" id="carNac">
                                </div>
                                <div class="col-md-3">
                                    <label for="carSexo" class="form-label">Seleccione su sexo</label>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="carSexo" class="form-check-input" id="carM" value="M">
                                        <label for="carM" class="form-check-label">Masculino</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="carSexo" class="form-check-input" id="carF" value="F">
                                        <label for="carF" class="form-check-label">Femenino</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="hidden" name="carSexo" class="form-check-input" id="carV" value="" checked>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="parentesco" class="form-label">Seleccione parentesco</label>
                                    <select class="form-select" id="par">
                                        <option value="">Seleccionar</option>
                                        <option value="1">Conyuge</option>
                                        <option value="2">Ascendiente</option>
                                        <option value="3">Descendiente</option>
                                        <option value="4">Hijo con discapacidad</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="mov" class="form-label">Que desea hacer</label>
                                    <select class="form-select" id="accion">
                                        <option value="">Seleccionar</option>
                                        <option value="A">Adicional</option>
                                        <option value="E">Eliminar</option>
                                        <option value="M">Modificar</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="carRut" class="form-label">Rut</label>
                                    <input type="number" class="form-control" id="carRut2">
                                </div>
                                <div class="col-md-4">
                                    <label for="carApellido" class="form-label">Apellidos</label>
                                    <input type="text" class="form-control" id="carApellido2">
                                </div>
                                <div class="col-md-4">
                                    <label for="carNombre" class="form-label">Nombres</label>
                                    <input type="text" class="form-control" id="carNombre2">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="carNac" class="form-label">Fecha Nacimiento</label>
                                    <input type="date" class="form-control" placeholder="dd-mm-yyyy" id="carNac2">
                                </div>
                                <div class="col-md-3">
                                    <label for="carSexo" class="form-label">Seleccione su sexo</label>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="carSexo2" class="form-check-input" id="carM2" value="M">
                                        <label for="carM2" class="form-check-label">Masculino</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="carSexo2" class="form-check-input" id="carF2" value="F">
                                        <label for="carF2" class="form-check-label">Femenino</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="hidden" name="carSexo2" class="form-check-input" id="carV2" value="" checked>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="parentesco" class="form-label">Seleccione parentesco</label>
                                    <select class="form-select" id="par2">
                                        <option value="">Seleccionar</option>
                                        <option value="1">Conyuge</option>
                                        <option value="2">Ascendiente</option>
                                        <option value="3">Descendiente</option>
                                        <option value="4">Hijo con discapacidad</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="mov" class="form-label">Que desea hacer</label>
                                    <select class="form-select" id="accion2">
                                        <option value="">Seleccionar</option>
                                        <option value="A">Adicional</option>
                                        <option value="E">Eliminar</option>
                                        <option value="M">Modificar</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="carRut" class="form-label">Rut</label>
                                <input type="number" class="form-control" id="carRut3">
                            </div>
                            <div class="col-md-4">
                                <label for="carApellido" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" id="carApellido3">
                            </div>
                            <div class="col-md-4">
                                <label for="carNombre" class="form-label">Nombres</label>
                                <input type="text" class="form-control" id="carNombre3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="carNac" class="form-label">Fecha Nacimiento</label>
                                <input type="date" class="form-control" placeholder="dd-mm-yyyy" id="carNac3">
                            </div>
                            <div class="col-md-3">
                                <label for="carSexo" class="form-label">Seleccione su sexo</label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="carSexo3" class="form-check-input" id="carM3" value="M">
                                    <label for="carM3" class="form-check-label">Masculino</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="carSexo3" class="form-check-input" id="carF3" value="F">
                                    <label for="carF3" class="form-check-label">Femenino</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="hidden" name="carSexo3" class="form-check-input" id="carV3" value="" checked>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="parentesco" class="form-label">Seleccione parentesco</label>
                                <select class="form-select" id="par3">
                                    <option value="">Seleccionar</option>
                                    <option value="1">Conyuge</option>
                                    <option value="2">Ascendiente</option>
                                    <option value="3">Descendiente</option>
                                    <option value="4">Hijo con discapacidad</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="mov" class="form-label">Que desea hacer</label>
                                <select class="form-select" id="accion3">
                                    <option value="">Seleccionar</option>
                                    <option value="A">Adicional</option>
                                    <option value="E">Eliminar</option>
                                    <option value="M">Modificar</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="carRut" class="form-label">Rut</label>
                                <input type="number" class="form-control" id="carRut4">
                            </div>
                            <div class="col-md-4">
                                <label for="carApellido" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" id="carApellido4">
                            </div>
                            <div class="col-md-4">
                                <label for="carNombre" class="form-label">Nombres</label>
                                <input type="text" class="form-control" id="carNombre4">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="carNac" class="form-label">Fecha Nacimiento</label>
                                <input type="date" class="form-control" placeholder="dd-mm-yyyy" id="carNac4">
                            </div>
                            <div class="col-md-3">
                                <label for="carSexo" class="form-label">Seleccione su sexo</label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="carSexo4" class="form-check-input" id="carM4" value="M">
                                    <label for="carM4" class="form-check-label">Masculino</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="carSexo4" class="form-check-input" id="carF4" value="F">
                                    <label for="carF4" class="form-check-label">Femenino</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="hidden" name="carSexo4" class="form-check-input" id="carV4" value="" checked>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="parentesco" class="form-label">Seleccione parentesco</label>
                                <select class="form-select" id="par4">
                                    <option value="">Seleccionar</option>
                                    <option value="1">Conyuge</option>
                                    <option value="2">Ascendiente</option>
                                    <option value="3">Descendiente</option>
                                    <option value="4">Hijo con discapacidad</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="mov" class="form-label">Que desea hacer</label>
                                <select class="form-select" id="accion4">
                                    <option value="">Seleccionar</option>
                                    <option value="A">Adicional</option>
                                    <option value="E">Eliminar</option>
                                    <option value="M">Modificar</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="carRut" class="form-label">Rut</label>
                                <input type="number" class="form-control" id="carRut5">
                            </div>
                            <div class="col-md-4">
                                <label for="carApellido" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" id="carApellido5">
                            </div>
                            <div class="col-md-4">
                                <label for="carNombre" class="form-label">Nombres</label>
                                <input type="text" class="form-control" id="carNombre5">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="carNac" class="form-label">Fecha Nacimiento</label>
                                <input type="date" class="form-control" placeholder="dd-mm-yyyy" id="carNac5">
                            </div>
                            <div class="col-md-3">
                                <label for="carSexo" class="form-label">Seleccione su sexo</label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="carSexo5" class="form-check-input" id="carM5" value="M">
                                    <label for="carM5" class="form-check-label">Masculino</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="carSexo5" class="form-check-input" id="carF5" value="F">
                                    <label for="carF5" class="form-check-label">Femenino</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="hidden" name="carSexo5" class="form-check-input" id="carV5" value="" checked>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="parentesco" class="form-label">Seleccione parentesco</label>
                                <select class="form-select" id="par5">
                                    <option value="">Seleccionar</option>
                                    <option value="1">Conyuge</option>
                                    <option value="2">Ascendiente</option>
                                    <option value="3">Descendiente</option>
                                    <option value="4">Hijo con discapacidad</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="mov" class="form-label">Que desea hacer</label>
                                <select class="form-select" id="accion5">
                                    <option value="">Seleccionar</option>
                                    <option value="A">Adicional</option>
                                    <option value="E">Eliminar</option>
                                    <option value="M">Modificar</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <h4>7. Inscripción establecimiento público de salud</h4>
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <label for="establecimientoInscrito" class="form-label">¿Esta inscrito en algun establecimiento público de salud?</label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="inscrito" class="form-check-input" id="insS" value="1">
                                    <label for="insS" class="form-check-label">Si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="inscrito" class="form-check-input" id="insN" value="0">
                                    <label for="insN" class="form-check-label">No</label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h6>Si es asi:</h6>
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