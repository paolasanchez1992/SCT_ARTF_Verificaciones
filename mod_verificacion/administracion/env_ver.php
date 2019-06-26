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
       header('location:../extend/alerta.php?msj=Selecciona por lo menos una casilla&c=adm&p=cv&t=error');
    }else {

      for($i = 0; $i < $count; $i++){
        //echo $FOLIOS[$i]."<br>";
        $estatus = 'A';
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

        //CONDICIONAL PARA ENVIO DE CORREOS
         if (($centro == '2') || ($centro == '7') || ($centro == '8') || ($centro == '10') || ($centro == '19') || ($centro == '24') || ($centro == '26') || ($centro == '28') || ($centro == '32')) {
          // code...
          $mail->AddAddress("emartgab@sct.gob.mx","Eliut Martinez Gabriel");
          $mail->AddAddress("abrianop@sct.gob.mx","Alfredo Briano Perez ");
          $mail->AddBCC('jose.lopezy@sct.gob.mx',"Jose Luis Lopez Amaya");
          $mail->AddBCC('miguelhr290986@gmail.com',"Desarrollo");
        }
      elseif (($centro == '1') || ($centro == '5') || ($centro == '9') || ($centro == '11') || ($centro == '12') || ($centro == '14') || ($centro == '15') || ($centro == '16') || ($centro == '18') || ($centro == '22') || ($centro == '25')) {
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
          header('location:../extend/alerta.php?msj=Datos Registrados&c=adm&p=cv&t=success');
          }

    }
  }
  else {
  header('location:../extend/alerta.php?msj=Utiiza el Formulario&c=adm&p=cv&t=error');
  }

  ?>
