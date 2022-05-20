@extends('templates.index')

@section('content')
    <h1>Bienvenido al Panel de Administración</h1>
    <p>
        En esta sección podrá dirigirse a las diferentes visualizaciones de su rol.
    </p>
    <p>
        <a href="{{ route('admin.formdata.index') }}" class="btn btn-primary">
            Registro Formularios Registrados
        </a>
        <a href="{{ route('admin.users.index') }}" class="btn btn-primary">
            Registro Usuarios Registrados
        </a>
    </p>

@endsection
