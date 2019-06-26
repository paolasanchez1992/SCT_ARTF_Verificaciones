<?php

// RE-CAPTCHA CODE
$recaptcha = $_POST["g-recaptcha-response"];

// Recive el recurso desde google
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
    //SE TIENE QUE CAMBIAR EL KEY CON UNA CUENTA DE LA SCT
    'secret' => '6LdzKqYUAAAAADQ7-EbxrBGnQsVqO-EuiXPEGlLr',
    'response' => $recaptcha
);
$options = array(
    'http' => array(
        'method' => 'POST',
        'content' => http_build_query($data)
    )
);
$context = stream_context_create($options);
$verify = file_get_contents($url, true, $context);
$captcha_success = json_decode($verify);
if ($captcha_success->success) {


    include '../conexion/conexion.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = $con->real_escape_string(htmlentities($_POST['usuario']));
        $pass = $con->real_escape_string(htmlentities($_POST['contra']));
        $candado = ' ';
        $str_u = strpos($usuario, $candado);
        if (is_int($str_u)) {
            $usuario = '';
        } else {
            $user = $usuario;
        }

        $str_p = strpos($pass, $candado);
        if (is_int($str_p)) {
            $passw = '';
        } else {
            $passw = sha1($pass);
        }

        if ($usuario == null && $pass == null) {
            header('location:../extend/alerta.php?msj=Datos incorrectos&c=salir&p=salir&t=error');
        } else {

            $sel = $con->query("SELECT id, nick, pass, nombre, correo, nivel, bloqueo, foto, estado, zona FROM usuarios WHERE nick='$user' AND pass='$passw' AND bloqueo=1 ");
            $row = mysqli_num_rows($sel);
            if ($row == 1) {
                if ($var = $sel->fetch_assoc()) {
                    $id_user = $var['id'];
                    $nick = $var['nick'];
                    $contra = $var['pass'];
                    $nombre = $var['nombre'];
                    $email = $var['correo'];
                    $nivel = $var['nivel'];
                    $bloqueo = $var['bloqueo'];
                    $foto = $var['foto'];
                    $edo = $var['estado'];
                    $zona = $var['zona'];
                }
                if ($nick == $user && $contra == $passw) {
                    $_SESSION['id'] = $id_user;
                    $_SESSION['nick'] = $nick;
                    $_SESSION['nombre'] = $nombre;
                    $_SESSION['correo'] = $email;
                    $_SESSION['nivel'] = $nivel;
                    $_SESSION['foto'] = $foto;
                    $_SESSION['tiempo'] = time();
                    $_SESSION['estado'] = $edo;
                    $_SESSION['zona'] = $zona;

                    if ($nivel == 'ADMIN') {
                        header('location:../extend/alerta.php?msj=Bienvenido&c=adm&p=adm&t=success');
                    } elseif ($nivel == 'DIRECTOR') {
                        $_SESSION['tipo_u'] = $tipousuario;
                        header('location:../extend/alerta.php?msj=Bienvenido&c=dir&p=in&t=success');
                    } elseif ($nivel == 'DIRECTORN') {
                        $_SESSION['tipo_u'] = $tipousuario;
                        header('location:../extend/alerta.php?msj=Bienvenido&c=dire&p=in&t=success');
                    } elseif ($nivel == 'DIRECTORC') {
                        $_SESSION['tipo_u'] = $tipousuario;
                        header('location:../extend/alerta.php?msj=Bienvenido&c=dire&p=in&t=success');
                    } elseif ($nivel == 'DIRECTORS') {
                        $_SESSION['tipo_u'] = $tipousuario;
                        header('location:../extend/alerta.php?msj=Bienvenido&c=dire&p=in&t=success');
                    } elseif ($nivel == 'SUBDIRECTORS') {
                        $_SESSION['tipo_u'] = $tipousuario;
                        header('location:../extend/alerta.php?msj=Bienvenido&c=sub&p=in&t=success');
                    } elseif ($nivel == 'SUBDIRECTORC') {
                        $_SESSION['tipo_u'] = $tipousuario;
                        header('location:../extend/alerta.php?msj=Bienvenido&c=sub&p=in&t=success');
                    } elseif ($nivel == 'SUBDIRECTORN') {
                        $_SESSION['tipo_u'] = $tipousuario;
                        header('location:../extend/alerta.php?msj=Bienvenido&c=sub&p=in&t=success');
                    } elseif ($nivel == 'VERIFICADOR') {
                        $_SESSION['tipo_u'] = $tipousuario;
                        header('location:../extend/alerta.php?msj=Bienvenido&c=ver&p=in&t=success');
                    }

                } else {
                    header('location:../extend/alerta.php?msj=No tienes permisos para ingresar&c=salir&p=salir&t=error');
                }
            } else {
                header('location:../extend/alerta.php?msj=Usuario y/o Password incorrectos o Usuario bloqueado....&c=salir&p=salir&t=error');
            }

        }

        $con->close();
    } else {
        header('location:../extend/alerta.php?msj=Utiiza el Formulario&c=salir&p=salir&t=error');
    }


} else {

    echo "<script type=\"text/javascript\">alert(\"Eres un robot\");</script>";

}

?>
