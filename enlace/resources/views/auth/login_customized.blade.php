<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Enlace</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/material.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body class="account-page">

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <div class="account-content">

            <div class="container">

                <div class="account-box">
                    <div class="account-wrapper">
                        <h3 class="account-title">Inicio de Sesión</h3>
                        <p class="account-subtitle">Accede a tu cuenta</p>

                        <!-- Account Form -->
                        <form method="POST" action="{{ route('auth.login') }}">
                            @csrf
                            <div class="form-group">
                                <label>Correo electrónico</label>
                                <input class="form-control" type="text" name="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label>Contraseña</label>
                                    </div>
                                    {{-- <div class="col-auto">
                                        <a class="text-muted" href="forgot-password.html">
                                            Olvidaste tu Contraseña?
                                        </a>
                                    </div> --}}
                                </div>
                                <input class="form-control" type="password" name="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary account-btn" type="submit">Entrar</button>
                            </div>
                            {{-- <div class="account-footer">
                                <p>Don't have an account yet? <a href="register.html">Register</a></p>
                            </div> --}}
                            @if (session('success'))
                            <p>{{ session('success') }}</p>
                            @endif
                            @if (session('error'))
                            <p>{{ session('error') }}</p>
                            @endif
                        </form>
                        <!-- /Account Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('js/app_template.js')}}"></script>

</body>

</html>