@extends('templates.index')

@section('content')
    <h1 align="center">Bienvenido al Panel de Administración</h1>
    <p align="center">
        En esta sección podrá dirigirse a las diferentes visualizaciones de su rol.
    </p>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 align="center">Formularios</h3>
                </div>
                <div class="card-body">
                    <p align="center">
                        En esta sección podrá visualizar los Formularios registrados en el sistema.
                    </p>
                    <p align="center">
                        <a href="{{ route('admin.formdata.index') }}" class="btn btn-primary">
                            Ver Formularios
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 align="center">Usuarios</h3>
                </div>
                <div class="card-body">
                    <p align="center">
                        En esta sección podrá visualizar los usuarios registrados en el sistema.
                    </p>
                    <p align="center">
                        <a href="{{ route('admin.users.index') }}" class="btn btn-primary">
                            Ver Usuarios
                        </a>
                    </p>
                </div>
            </div>
        </div>
    @endsection
