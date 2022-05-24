@extends('templates.index')

@section('content')
    <form method="POST" action="{{ route('register') }}" class="register-form">
        @csrf
        <div class="form-group mt-3">
            <input type="text" class="form-control" id="name" type="name" name="name" required />
            <label class="form-control-placeholder" for="name">Nombre y Apellido</label>

            <div class="form-group mt-3">
                <input type="text" class="form-control" id="email" type="email" name="email" required />
                <label class="form-control-placeholder" for="email">Correo</label>
            </div>

            <div class="form-group">
                <input id="password" type="password" class="form-control" name="password" autocomplete="current-password"
                    required />
                <label class="form-control-placeholder" for="password">Contraseña</label>
                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>

            <div class="form-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                    autocomplete="current-password" required />
                <label class="form-control-placeholder" for="password-confirm">Confirmar
                    Contraseña</label>
                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>

            <div class="form-group">
                <button type="submit" class="form-control btn btn-primary rounded submit px-3">
                    Crear Usuario
                </button>
            </div>
        </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
