@extends('templates.index')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1 class="float-left">Usuarios</h1>
            <a href="{{ route('admin.users.create') }}" class="btn btn-success float-right">Crear</a>
        </div>
    </div>

    <div class="card">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo Electronico</th>
                    <th scope="col">Fecha de Registro</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>
                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">Editar</a>

                            <form id="delete-user-form-{{ $user->id }}"
                                action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display: none"
                                @csrf
                                @method("DELETE")
                            </form>
                            <button type="button" class="btn btn-danger" onclick="document.getElementById('delete-user-form-{{ $user->id }}').submit();">Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
@endsection
