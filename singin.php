<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sing In - Rapiturno</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Registrar Usuario</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                        <input class="form-control" placeholder="Cédula, T.I, o Pasaporte" name="id" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                        <input class="form-control" placeholder="Nombre Completo" name="nombre" type="nombre" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contraseña" name="pass" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Estudiante, Particular, Egresado" name="tipo" type="text" autofocus>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="index.php" class="btn btn-lg btn-success btn-block" name="registrar">Registrar</a>
                            </fieldset>
                        </form>
                        <div class="panel-footer">
                            <a href="login.php">Entrar</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

<?php
    if(isset($_POST['registrar'])){
        require_once("conexion.php");
        require_once("usuarioBD.php");
        $con = new conexion();
        $usu = new usuario();
        $con->conectar();
        $usu->add($_POST["id"],$_POST["nombre"],$_POST["email"],$_POST["pass"],$_POST["tipo"]);
        $con->desconectar();
    }
?>

</html>
