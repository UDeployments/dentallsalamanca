<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Dent-all SignIn </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('/images/favicon.ico') }}"/>
    <link href="{{ asset('/css/management/light/loader.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/css/management/dark/loader.css') }}" rel="stylesheet" type="text/css"/>
    <script src="{{ asset('/js/management/loader.js') }}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

    <link href="{{ asset('/css/management/light/plugins.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/css/management/assets/light/authentication/auth-cover.css') }}" rel="stylesheet"
          type="text/css"/>

    <link href="{{ asset('/css/management/dark/plugins.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/css/management/assets/dark/authentication/auth-cover.css') }}" rel="stylesheet"
          type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

</head>
<body class="form">

<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->

<div class="auth-container d-flex">
    <div class="container mx-auto align-self-center">
        <div class="row">
            <div
                class="col-6 d-lg-flex d-none h-100 my-auto top-0 start-0 text-center justify-content-center flex-column">
                <div class="auth-cover-bg-image"></div>
                <div class="auth-overlay"></div>
                <div class="auth-cover">
                    <div class="position-relative">
                        <img src="{{ asset('/images/management/login/logo.svg') }}" alt="Logo Dent-all">
                    </div>
                </div>
            </div>
            <div
                class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center ms-lg-auto me-lg-0 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <h2>Inicio de Sesión</h2>
                                <p>Ingresa tu usuario / correo y contraseña para iniciar sesión</p>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Usuario / Correo</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-4">
                                    <label class="form-label">Contraseña</label>
                                    <input type="password" class="form-control">
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
                            <div class="col-12 mb-4">
                                <div class="">
                                    <div class="seperator">
                                        <hr>
                                        <div class="seperator-text"><span>O continua con</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-12">
                                <div class="mb-4">
                                    <button class="btn  btn-social-login w-100 ">
                                        <img src="{{ asset('/images/management/login/gmail.svg') }}"
                                             alt="Icon Google Gmail" class="img-fluid">
                                        <span class="btn-text-inner">Google</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-4 col-12">
                                <div class="mb-4">
                                    <button class="btn  btn-social-login w-100">
                                        <img src="{{ asset('/images/management/login/apple-id.svg') }}"
                                             alt="Icon Apple ID" class="img-fluid">
                                        <span class="btn-text-inner">Apple ID</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-4 col-12">
                                <div class="mb-4">
                                    <button class="btn  btn-social-login w-100">
                                        <img src="{{ asset('/images/management/login/facebook.svg') }}"
                                             alt="Icon Apple ID" class="img-fluid">
                                        <span class="btn-text-inner">Facebook</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="text-center">
                                    <p class="mb-0">¿Aun no tienes cuenta? <a href="javascript:void(0);"
                                                                              class="text-warning">Registrarse</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ assert('/js/bootstrap.bundle.min.js') }}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->
</body>
</html>
