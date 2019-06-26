<?php
header("Content-Type: text/html;charset=utf-8");
include '../conexion/conexion.php';
include '../funciones/piv.php';
require ('../email/mail/class.phpmailer.php');

  $cen = $con->real_escape_string(htmlentities($_GET['id']));

  $sel_con = $con->query("SELECT id_centro FROM verificaciones_pro WHERE id = '$cen' ");
    while ($f_con = $sel_con->fetch_assoc()) {
      $centro = $f_con['id_centro'];
    }

    $nom_centro = nombre_centro($centro);

    $estatus = 'I';

    $up = $con->prepare("UPDATE verificaciones_pro SET estatus_ini=? WHERE id=? ");
    $up->bind_param("si", $estatus, $cen);
    $up->execute();
    $up->close();


    //ENVIAR CORREO ELECTRONICO
    $mail = new PHPMailer;
    // Configuramos el protocolo SMTP con autenticación
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->CharSet = "UTF-8";
    // Configuración del servidor SMTP
    $mail->Port = 26;
    $mail->Host = 'rcapulin.com';
    $mail->Username = "info@rcapulin.com";
    $mail->Password = "Runn3r_45%$";

    // Configuración cabeceras del mensaje
    $mail->From = "info@rcapulin.com";
    $mail->FromName = "PIV";

    //CONDICIONAL PARA ENVIO DE CORREOS
    if (($cen == '2') || ($cen == '7') || ($cen == '8') || ($cen == '10') || ($cen == '19') || ($cen == '24') || ($cen == '26') || ($cen == '28') || ($cen == '32')) {
      // code...
      $mail->AddAddress("emartgab@sct.gob.mx","Eliut Martinez Gabriel");
      $mail->AddAddress("abrianop@sct.gob.mx","Alfredo Briano Perez ");
      $mail->AddBCC('jose.lopezy@sct.gob.mx',"Jose Luis Lopez Amaya");
      $mail->AddBCC('miguelhr290986@gmail.com',"Desarrollo");
    }
    elseif (($cen == '1') || ($cen == '5') || ($cen == '9') || ($cen == '11') || ($cen == '12') || ($cen == '14') || ($cen == '15') || ($cen == '16') || ($cen == '18') || ($cen == '22') || ($cen == '25')) {
      // code...
      $mail->AddAddress("luis.aguilar@sct.gob.mx","Luis Antonio Aguilar Flores");
      $mail->AddAddress("jalvarad@sct.gob.mx","Juan Carlos Alvarado Jimenez");
      $mail->AddBCC('jose.lopezy@sct.gob.mx',"Jose Luis Lopez Amaya");
      $mail->AddBCC('miguelhr290986@gmail.com',"Desarrollo");
    }
    else {
      // code...
      $mail->AddAddress("pvacio@sct.gob.mx","Pedro Vacio Cruz ");
      $mail->AddBCC('jose.lopezy@sct.gob.mx',"Jose Luis Lopez Amaya");
      $mail->AddBCC('miguelhr290986@gmail.com',"Desarrollo");

    }

    //Cargamos la plantilla admin para el cuerpo del Email
    $body = file_get_contents("../plantillas/dev_piv.html");
    $mail->Subject = "PIV";

    $sustituir_A = "%A%";
    $por_A = trim(utf8_decode($nom_centro));
    $body = str_replace($sustituir_A, $por_A, $body);

    // Aquí incluimos el cuerpo del mensaje ya modificado
    $mail->MsgHTML($body);
    $mail->isHTML(true);

    if(!$mail->Send())
      {
       echo "Message was not sent";
       echo "Mailer Error: " . $mail->ErrorInfo;
      }
       else {
      header('location:../extend/alerta.php?msj=Datos Registrados&c=dire&p=regp&t=success');
      }


  ?>
