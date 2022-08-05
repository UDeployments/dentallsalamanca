<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    @switch(getPath())
        @case('SignIn')
            <title>Dent-all | Inicio Sesión</title>
            @break
        @case('SignUp')
            <title>Dent-all | Registro</title>
            @break
    @endswitch
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
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->
</body>
</html>