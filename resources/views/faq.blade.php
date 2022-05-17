@extends('templates.faqBar')

@section('content')

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Preguntas Frecuentes</h1>
                    <hr>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        ¿Cómo puedo registrarme?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Debes estar afiliado a Fonasa, puedes hacerlo por nuestra web o de forma directa en
                                    sucursal.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        ¿Puedo realizar una consulta sin registrarme?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Puedes contactar nuestro CallCenter pero lamentablemente este formulario es solo para
                                    afiliados
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        ¿Donde Contacto si tengo complicaciones?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Si tienes problemas con este formulario o no puedes iniciar sesion, puedes contactar con
                                    la plataforma de soportes en nuestro CallCenter o por Email
                                </div>
                                <a href="mailto:soporte@testing.com" class="btn btn-primary">Soporte WEB</a>
                            </div>
    </body>
@endsection
