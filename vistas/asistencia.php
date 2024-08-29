<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CC | Asistencia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../admin/public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../admin/public/css/font-awesome.css">
    <!-- Estilos personalizados -->
    <style>
        /* Estilos personalizados para el formulario y la página */
        body {
            background: url('../vistas/images.jfif') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            font-family: 'Arial', sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .lockscreen-wrapper {
            background: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            padding: 30px 20px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        .lockscreen-logo img {
            max-width: 80px;
            border-radius: 50%;
            border: 3px solid #007bff;
            margin-bottom: 20px;
        }

        .lockscreen-logo a {
            color: #fff;
            font-size: 24px;
            text-decoration: none;
        }

        .lockscreen-name {
            font-size: 22px;
            margin-bottom: 10px;
            color: #fff;
        }

        .lockscreen-item {
            margin-bottom: 30px;
            text-align: center;
        }

        .lockscreen-image img {
            max-width: 70px;
            border-radius: 50%;
            border: 3px solid #007bff;
        }

        .input-group {
            text-align: left;
            margin-bottom: 20px;
        }

        .input-group input {
            width: calc(100% - 40px);
            padding: 10px;
            border-radius: 5px;
            border: none;
            font-size: 16px;
            background-color: #333;
            color: #fff;
        }

        .input-group-btn {
            padding: 0;
            background-color: #007bff;
            border-radius: 0 5px 5px 0;
        }

        .btn-primary {
            width: 40px;
            height: 40px;
            border-radius: 0 5px 5px 0;
            background-color: #007bff;
            border: none;
        }

        .btn-primary i {
            color: #fff;
        }

        .help-block {
            color: #ccc;
        }

        .lockscreen-footer a {
            color: #00bfff;
            text-decoration: none;
        }

        .lockscreen-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body class="hold-transition lockscreen">

<div class="lockscreen-wrapper">
    <div name="movimientos" id="movimientos">
        <!-- Espacio para movimientos si es necesario -->
    </div>

    <div class="lockscreen-item">
        <div class="lockscreen-image">
            <img src="../admin/files/negocio/default1.png" alt="User Image">
        </div>

    <div class="lockscreen-logo">
        <a href="#"><b>U.E.P.</b> Flor de María Vásquez</a>
    </div>

    <div class="lockscreen-name">Asistencia de profesores</div>

    

        <form action="" class="lockscreen-credentials" name="formulario" id="formulario" method="POST">
            <div class="input-group">
                <input type="password" class="form-control" name="codigo_persona" id="codigo_persona" placeholder="ID de asistencia">
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-arrow-right text-muted"></i></button>
                </div>
            </div>
        </form>
    </div>

    <div class="help-block text-center">
        Ingresa tu ID de asistencia
    </div>
    <div class="lockscreen-footer text-center">
        <a href="../admin/">Iniciar Sesión</a>
    </div>
</div>

<!-- jQuery -->
<script src="../admin/public/js/jquery-3.1.1.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="../admin/public/js/bootstrap.min.js"></script>
<!-- Bootbox -->
<script src="../admin/public/js/bootbox.min.js"></script>
<!-- Asistencia JS -->
<script type="text/javascript" src="scripts/asistencia.js"></script>

</body>
</html>
