@extends('Authentication.base')
@section('content')
    <form id="formSignUp" class="row" method="POST" action="{{ route('Auth.store') }}">
        @csrf
        <div class="col-md-12 mb-3">
            <h2>Registro</h2>
            <p>Completa los datos del formulario para registrarte</p>
        </div>
        <div class="col-md-12">
            <div class="mb-2">
                <label for="full_name" class="form-label">Nombre</label>
                <input id="full_name" name="full_name" type="text" class="form-control" value="{{ old('full_name') }}"
                       required>
                <div id="message-full_name" class="invalid-feedback" style="display: inline">
                    @if ($errors->any())
                        {{ $errors->first('full_name') }}
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-2">
                <label for="username" class="form-label">Usuario</label>
                <input id="username" name="username" type="text" class="form-control" value="{{ old('username') }}"
                       required>
                <div id="message-username" class="invalid-feedback" style="display: inline">
                    @if ($errors->any())
                        {{ $errors->first('username') }}
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-2">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input id="email" name="email" type="email" class="form-control" value="{{ old('email') }}" required>
                <div id="message-email" class="invalid-feedback" style="display: inline">
                    @if ($errors->any())
                        {{ $errors->first('email') }}
                    @endif
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="mb-2">
                <label for="password" class="form-label">Contraseña</label>
                <div class="input-group">
                    <input id="password" name="password" type="password" class="form-control" required>
                    <span class="input-group-text" id="inputGroupPrepend2">
                        <i id="show-pwd" class="material-symbols-outlined show-password">visibility</i>
                        <i id="hidden-pwd" class="material-symbols-outlined hidden-password">visibility_off</i>
                    </span>
                </div>
                <div id="message-password" class="invalid-feedback" style="display: inline">
                    @if ($errors->any())
                        {{ $errors->first('password') }}
                    @endif
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <label for="valid_password" class="form-label">Confirmar contraseña</label>
                <div class="input-group">
                    <input id="valid_password" name="valid_password" type="password" class="form-control" required>
                    <span class="input-group-text" id="inputGroupPrepend2">
                        <i id="show-valid-pwd" class="material-symbols-outlined show-password">visibility</i>
                        <i id="hidden-valid-pwd" class="material-symbols-outlined hidden-password">visibility_off</i>
                    </span>
                </div>
                <div id="message-valid_password" class="invalid-feedback" style="display: inline">
                    @if ($errors->any())
                        {{ $errors->first('valid_password') }}
                    @endif
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="mb-4">
                <button class="btn btn-primary w-100" type="submit">Registrarme</button>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-12">
            <div class="">
                <div class="separator">
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="text-center">
                <p class="mb-0">¿Ya tienes una cuenta? <a href="{{ route('Auth.index') }}" class="text-warning">Iniciar
                        Sesión</a>
                </p>
            </div>
        </div>
    </div>
@endsection
