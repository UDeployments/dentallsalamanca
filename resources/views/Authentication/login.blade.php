@extends('Authentication.base')
@section('content')
    <div class="row">
        <div class="col-md-12 mb-3">
            <h2>Inicio de Sesión</h2>
            <p>Ingresa tu usuario / correo y contraseña para iniciar sesión</p>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <label for="username" class="form-label">Usuario / Correo</label>
                <input id="username" type="text" class="form-control">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-4">
                <label for="password" class="form-label">Contraseña</label>
                <input id="password" type="password" class="form-control">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <div class="form-check form-check-primary form-check-inline">
                    <input class="form-check-input me-3" type="checkbox" id="form-check-default">
                    <label class="form-check-label" for="form-check-default">
                        Recordarme
                    </label>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="mb-4">
                <button class="btn btn-primary w-100">Iniciar sesión</button>
            </div>
        </div>
        <div class="col-12">
            <div class="">
                <div class="separator">
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="text-center">
                <p class="mb-0">¿Aún no tienes cuenta? <a href="{{ route('Auth.create') }}"
                                                          class="text-warning">Registrarse</a></p>
            </div>
        </div>
    </div>
@endsection
