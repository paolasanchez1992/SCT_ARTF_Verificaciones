<?php
header("Content-Type: text/html;charset=utf-8");
include '../conexion/conexion.php';
require ('../email/mail/class.phpmailer.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $centro = $con->real_escape_string(htmlentities($_POST['centro']));
   $FOLIOS = $_POST['FTC'];
   //ARREGLO DE FOLIOS
   $count = count($FOLIOS);

    if (empty($count)) {
       header('location:../extend/alerta.php?msj=Selecciona por lo menos una casilla&c=dire&p=cv&t=error');
    }else {

      for($i = 0; $i < $count; $i++){
        //echo $FOLIOS[$i]."<br>";
        $estatus = 'R';
        //echo $centro;

        $up = $con->prepare("UPDATE detalle_cal SET estatus=? WHERE id_ver=? ");
        $up->bind_param("si", $estatus, $FOLIOS[$i]);
        $up->execute();
        $up->close();

      }

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
      $mail->FromName = "SEGUIMIENTO AL PROGRAMA DE VERIFICACIÓN";

        $mail->AddAddress('jose.lopezy@sct.gob.mx',"Jose Luis Lopez Amaya");
        $mail->AddBCC('miguelhr290986@gmail.com',"Desarrollo");

        //Cargamos la plantilla admin para el cuerpo del Email
        $body = file_get_contents("../plantillas/notifica_verificacion.html");
        $mail->Subject = "SEGUIMIENTO AL PROGRAMA DE VERIFICACIÓN";

        // Aquí incluimos el cuerpo del mensaje ya modificado
        $mail->MsgHTML($body);
        $mail->isHTML(true);

        if(!$mail->Send())
          {
           echo "Message was not sent";
           echo "Mailer Error: " . $mail->ErrorInfo;
          }
           else {
          header('location:../extend/alerta.php?msj=Datos Registrados&c=dire&p=cv&t=success');
          }

    }
  }
  else {
  header('location:../extend/alerta.php?msj=Utiiza el Formulario&c=dire&p=cv&t=error');
  }

  ?>
