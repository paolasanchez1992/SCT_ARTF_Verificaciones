<?php
include '../conexion/conexion.php';
require ('../email/mail/class.phpmailer.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id_ver = $con->real_escape_string(htmlentities($_POST['id_ver']));
  $lugar = $con->real_escape_string(htmlentities($_POST['sitio']));
  $fecha = $con->real_escape_string(htmlentities($_POST['fecha']));
  $fecha_f = $con->real_escape_string(htmlentities($_POST['fechaf']));
  $hora = $con->real_escape_string(htmlentities($_POST['hora']));
  $ver = $con->real_escape_string(htmlentities($_POST['ver']));

  $string=$fecha;
  $A1=$string[0]; $A2=$string[1]; $A3=$string[2]; $A4=$string[3]; $A5=$string[4];
  $A6=$string[5]; $A7=$string[6]; $A8=$string[7]; $A9=$string[8]; $A10=$string[9];
  $mes = $A6.$A7;
  $dia1 = $A9.$A10;

  $string=$fecha_f;
  $B1=$string[0]; $B2=$string[1]; $B3=$string[2]; $B4=$string[3]; $B5=$string[4];
  $B6=$string[5]; $B7=$string[6]; $B8=$string[7]; $B9=$string[8]; $B10=$string[9];

  $mes2 = $B6.$B7;
  $dia2 = $B9.$B10;

  //restriccion de fecha
  $fecha_mes = date("m");
  $fecha_mes = $fecha_mes + 1;
  $fecha_mes = '0'.$fecha_mes;

  if (($mes < $fecha_mes) || ($mes > $fecha_mes)) {
    header('location:../extend/alerta.php?msj=Selecciona Fecha del mes correspondiente&c=dire&p=cv&t=error');
  }
  elseif (($mes2 < $fecha_mes) || ($mes2 > $fecha_mes)) {
    header('location:../extend/alerta.php?msj=Selecciona Fecha del mes correspondiente&c=dire&p=cv&t=error');
  }
  elseif ($dia2 < $dia1) {
    header('location:../extend/alerta.php?msj=Fecha Incorrecta favor de revisar&c=dire&p=cv&t=error');
  }
  else {

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

   $sel_us = $con->prepare("SELECT correo FROM usuarios WHERE nombre = ? ");
   $sel_us->bind_param('s', $ver);
   $sel_us->execute();
   $res_us = $sel_us->get_result();
   if ($f_us = $res_us->fetch_assoc()) {
   $correo = $f_us['correo'];
   }

   $correo = 'miguelhr290986@gmail.com';
   $verificador = $_SESSION['nombre'];



  $up = $con->query("UPDATE detalle_cal SET lugar='$lugar', fecha='$fecha', fecha_f='$fecha_f', hora='$hora' where id_ver='$id_ver' ");
  if($up){

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
    $mail->FromName = "REPROGRAMACIÓN DE VERIFICACIÓN";
     $mail->AddAddress($correo,$verificador);
     $mail->AddAddress("jose.lopezy@sct.gob.mx","Jose Luis Amaya Lopez");
     $mail->AddBCC('miguelhr290986@hotmail.com',"Desarrollo");

     //$mail->AddBCC("ma.hernandez@rh-consulting.com.mx","RH");

     //Cargamos la plantilla admin para el cuerpo del Email
     $body = file_get_contents("../plantillas/cal_verificacion_act.html");
     $mail->Subject = "Reprogramación de Verificación";

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
     $por_L = trim(utf8_decode($lugar));
     $body = str_replace($sustituir_L, $por_L, $body);

     $sustituir_M = "%M%";
     $por_M = trim(utf8_decode($fecha));
     $body = str_replace($sustituir_M, $por_M, $body);

     $sustituir_MF = "%MF%";
     $por_MF = trim(utf8_decode($fecha_f));
     $body = str_replace($sustituir_MF, $por_MF, $body);

     $sustituir_N = "%N%";
     $por_N = trim(utf8_decode($hora));
     $body = str_replace($sustituir_N, $por_N, $body);

     $sustituir_O = "%O%";
     $por_O = trim(utf8_decode($verificador));
     $body = str_replace($sustituir_O, $por_O, $body);

     // Aquí incluimos el cuerpo del mensaje ya modificado
     $mail->MsgHTML($body);
     $mail->isHTML(true);

     //$mail->Send(); // Devolver el resultado

     if(!$mail->Send())
       {
        echo "Message was not sent";
        echo "Mailer Error: " . $mail->ErrorInfo;
       }
        else {
       header('location:../extend/alerta.php?msj=Datos Actualizados&c=dire&p=cv&t=success');
       }

  }else {
    header('location:../extend/alerta.php?msj=Datos no actualizados&c=dire&p=cv&t=error');
  }
  $con->close();
 }
}else {
  header('location:../extend/alerta.php?msj=Utiiza el Formulario&c=dire&p=cv&t=error');
}

?>
