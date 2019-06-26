<?php
error_reporting(0);
include '../conexion/conexion.php';
require ('../email/mail/class.phpmailer.php');

    $id_ver = $con->real_escape_string(htmlentities($_GET['id']));

//consulta de datos
    $sel = $con->prepare("SELECT * FROM descripcion_ver WHERE id = ? ");
    $sel->bind_param('s', $id_ver);
    $sel->execute();
    $res = $sel->get_result();
    if ($f = $res->fetch_assoc()) {

    }

    $sel_ver = $con->prepare("SELECT * FROM verificaciones WHERE id_ver = ? ");
    $sel_ver->bind_param('s', $id_ver);
    $sel_ver->execute();
    $res_ver = $sel_ver->get_result();
    if ($f_ver = $res_ver->fetch_assoc()) {

    }

    //ENVIAR CORREO ELECTRONICO
    $mail = new PHPMailer;
    // Configuramos el protocolo SMTP con autenticación
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->CharSet = "UTF-8";

    //$mail->SMTPDebug = 2;

    // Configuración del servidor SMTP
    /*
    $mail->Port = 465;
    $mail->SMTPSecure = 'SSL';
    $mail->Host = 'smtp.live.com';
    $mail->Username = "miguelhr290986@hotmail.com";
    $mail->Password = "C0rpocr3d";
    */
    $mail->Port = 26;
    $mail->Host = 'taynisports.com';
    $mail->Username = "info@taynisports.com";
    $mail->Password = "T#1ni#po_12";

    // Configuración cabeceras del mensaje
    $mail->From = "info@taynisports.com";
    $mail->FromName = "SEGUIMIENTO DE VERIFICACIÓN";

     $mail->AddAddress("jose.lopezy@sct.gob.mx","Jose Luis Amaya Lopez");
     $mail->AddBCC('miguelhr290986@gmail.com',"Desarrollo");

     //$mail->AddBCC("ma.hernandez@rh-consulting.com.mx","RH");

     //Cargamos la plantilla admin para el cuerpo del Email
     $body = file_get_contents("../plantillas/verificacion.html");
     $mail->Subject = "Revisión de Verificación";

     $sustituir_A = "%A%";
     $por_A = trim(utf8_decode($f['id_centro']));
     $body = str_replace($sustituir_A, $por_A, $body);

     $sustituir_B = "%B%";
     $por_B = trim(utf8_decode($f['numero']));
     $body = str_replace($sustituir_B, $por_B, $body);

     $sustituir_C = "%C%";
     $por_C = trim(utf8_decode($f['mes']));
     $body = str_replace($sustituir_C, $por_C, $body);

     $sustituir_D = "%D%";
     $por_D = trim(utf8_decode($f['area_ver']));
     $body = str_replace($sustituir_D, $por_D, $body);

     $sustituir_E = "%E%";
     $por_E = trim(utf8_decode($f['vgcf']));
     $body = str_replace($sustituir_E, $por_E, $body);

     $sustituir_F = "%F%";
     $por_F = trim(utf8_decode($f['empresa']));
     $body = str_replace($sustituir_F, $por_F, $body);

     $sustituir_G = "%G%";
     $por_G = trim(utf8_decode($f['tramo']));
     $body = str_replace($sustituir_G, $por_G, $body);

     $sustituir_H = "%H%";
     $por_H = trim(utf8_decode($f['linea']));
     $body = str_replace($sustituir_H, $por_H, $body);

     $sustituir_I = "%I%";
     $por_I = trim(utf8_decode($f['km_ini']));
     $body = str_replace($sustituir_I, $por_I, $body);

     $sustituir_J = "%J%";
     $por_J = trim(utf8_decode($f['km_fin']));
     $body = str_replace($sustituir_J, $por_J, $body);

     $sustituir_K = "%K%";
     $por_K = trim(utf8_decode($f['km_redf']));
     $body = str_replace($sustituir_K, $por_K, $body);

     $sustituir_L = "%L%";
     $por_L = trim(utf8_decode($f_ver['estatus']));
     $body = str_replace($sustituir_L, $por_L, $body);

     // Aquí incluimos el cuerpo del mensaje ya modificado
     $mail->MsgHTML($body);
     $mail->isHTML(true);

     //$mail->Send(); // Devolver el resultado


     if(!$mail->Send())
       {
   echo "Message was not sent";
   echo "Mailer Error: " . $mail->ErrorInfo;
      }
else
{
   echo "Message has been sent";
      header('location:../extend/alerta.php?msj=Datos Enviados Correctamente&c=ver&p=ver&t=success');
}



    $con->close();

 ?>
