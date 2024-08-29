<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../public/css/blue.css">
    <link rel="shortcut icon" href="../public/img/favicon.ico">

    <style>
        /* Estilo para el cuerpo del documento */
        body {
            background: #add8e6; /* Color de fondo azul claro */
            color: #fff; /* Color del texto */
            font-family: 'Arial', sans-serif; /* Fuente del texto Arial */
            margin: 0; /* Elimina márgenes por defecto */
            display: flex; /* Utiliza Flexbox para centrar contenido */
            justify-content: center; /* Centra contenido horizontalmente */
            align-items: center; /* Centra contenido verticalmente */
            height: 100vh; /* Altura de la vista completa */
        }

        /* Estilo para el contenedor del formulario */
        .form-wrapper {
            background: rgba(255, 255, 255, 0.85); /* Fondo blanco con opacidad */
            border-radius: 10px; /* Bordes redondeados */
            padding: 20px 20px; /* Espaciado interno ajustado */
            width: 100%; /* Ancho completo en pantallas pequeñas */
            max-width: 400px; /* Ancho máximo */
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3); /* Sombra más prominente para efecto flotante */
            text-align: center; /* Centra texto */
        }
    </style>
</head>
<body class="hold-transition login-page">
    <?php require '../config/Conexion.php'; ?>
    <div class="form-wrapper">
        <div class="login-logo">
            <a href="login.php"><b>U.E.P</b> Flor de María Basquez</a>
        </div><!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Ingrese sus datos de Acceso</p>
            <form method="post" id="frmAcceso">
                <div class="form-group has-feedback">
                    <input type="text" id="logina" name="logina" class="form-control" placeholder="Usuario">
                    <span class="fa fa-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" id="clavea" name="clavea" class="form-control" placeholder="Password">
                    <span class="fa fa-key form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8"></div><!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                    </div><!-- /.col -->
                </div>
            </form>
        </div><!-- /.login-box-body -->
    </div><!-- /.form-wrapper -->

    <!-- jQuery -->
    <script src="../public/js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../public/js/bootstrap.min.js"></script>
    <!-- Bootbox -->
    <script src="../public/js/bootbox.min.js"></script>
    <script type="text/javascript" src="scripts/login.js"></script>
</body>
</html>
