@extends('templates.index')

@section('content')
    <h1 align="center">Bienvenido al Panel de Administración</h1>
    <p align="center">
        En esta sección podrá dirigirse a las diferentes visualizaciones de su rol.
    </p>
    <p align="center">
        <a href="{{ route('admin.formdata.index') }}" class="btn btn-primary">
            Registro Formularios Registrados
        </a>
        <a href="{{ route('admin.users.index') }}" class="btn btn-primary">
            Registro Usuarios Registrados
        </a>
    </p>
@endsection
