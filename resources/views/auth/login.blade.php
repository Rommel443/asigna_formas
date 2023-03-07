<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Inicia sesión</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <!--<link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">-->
    {!! Html::Style('plugins/bootstrap/css/bootstrap.css') !!}

    <!-- Waves Effect Css -->
    <!-- <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />-->
    {!! Html::Style('plugins/node-waves/waves.css') !!}

    <!-- Animation Css -->
    <!--<link href="../../plugins/animate-css/animate.css" rel="stylesheet" />-->
    {!! Html::Style('plugins/animate-css/animate.css') !!}

    <!-- Custom Css -->
    <!--<link href="../../css/style.css" rel="stylesheet">-->
    {!! Html::Style('css/style.css') !!}
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a>Sistema de <b>Asignación de Formas</b></a>
            <small>Iniciar Sesión en:</small>
        </div>
        <div class="card">
            <div class="body">
            <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>
                            <div class="form-line">
                                <input id="email" placeholder="Correo electrónico" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>
                            <div class="form-line">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-8 p-t-5">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">Recordar</label>
                            </div>
                            <div class="col-xs-4">
                                <button class="btn btn-block bg-pink waves-effect" type="submit">Entrar</button>
                                
                            </div>
                        </div>
                        <!-- <div class="row m-t-15 m-b--20">
                            
                            <div class="col-xs-6 align-right">
                            @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Recuperar contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div> -->

                        
                        
                    </form>    


            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/examples/sign-in.js"></script>
</body>

</html>