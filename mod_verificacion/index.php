<?php @session_start();
if (isset($_SESSION['nick'])) {
    header('location:administracion');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- mandaos a traer el css de materialize -->
    <link rel="stylesheet" href="css/materialize.min.css">
    <!-- mandaos a traer el css de iconos materialize -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Descripcion -->
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <meta name="keywords" content=""/>
    <link rel="shortcut icon" href="img/icon15.png">
    <title>ARTF</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <style media="screen">
        body {
            background: url('img/body/fondo.jpg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .input-field input:focus + label {
            color: #cfab71 !important;
        }

        .prefix {
            color: #27594b !important;
        }

        .btn {
            background-color: #27594b !important;
        }

        .btn:hover {
            background-color: #276a59 !important;
        }
    </style>


</head>
<body onload="ran_col()">
<main>
    <div class="row">
        <div class="input-field col s12 center">
            <a href="#"><img src="img/logo_inicio2.jpg" width="350"></a>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12 m4">

            </div>
            <div class="col s12 m4">
                <form action="login/index.php" method="post" autocomplete="off">

                    <div class="card z-depth-5">

                        <div class="card-content">
                            <span class="card-title center">Inicio de Sesión</span>
                            <div class="input-field">
                                <i class="material-icons prefix">account_box</i>
                                <input type="text" name="usuario" id="usuario" required
                                       title="Ingresa tu nombre de usuario" onblur="may(this.value, this.id)"
                                       pattern="[A-Za-z0-9]{8,15}" autofocus>
                                <label for="usuario">Usuario</label>
                            </div>
                            <div class="input-field">
                                <i class="material-icons prefix">vpn_key</i>
                                <input type="password" name="contra" id="contra" required
                                       title="Ingresa tu nombre de contraseña" onblur="may(this.value, this.id)"
                                       pattern="[A-Za-z0-9]{8,15}">
                                <label for="contra">Password</label>
                            </div>

                            <!--
                            <div class="input-field">
                              <a href="password/index.php" class="btn btn-floating  red pulse tooltipped" data-position="bottom" data-delay="50" data-tooltip="Recupera tu contraseña"><i class="material-icons">lock</i></a>
                            </div>
                          -->

                        </div>
                        <div class="g-recaptcha" data-sitekey="6LdzKqYUAAAAAIE3MLYDrSriF0qnUhteRJbgoo6l"></div>

                        <div class="row">
                            <div class="input-field center">
                                <div class="col s12 m12">
                                    <button type="submit" class="btn waves-effect waves-purple green"><i
                                                class="material-icons left">send</i>Ingresar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                        </div>
                    </div>
                </form>
            </div>
            <div class="col s12 m4">
            </div>
        </div>


    </div>

</main>


<!-- mandaos a traer el jquery -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<!-- mandaos a traer el js de materialize -->
<script src="js/materialize.min.js"></script>
<script src="js/color.js"></script>
</body>
</html>
