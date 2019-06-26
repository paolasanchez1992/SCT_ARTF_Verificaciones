<?php
header("Content-Type: text/html;charset=utf-8");
include '../conexion/conexion.php';
require ('../email/mail/class.phpmailer.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $cen = $con->real_escape_string(htmlentities($_POST['centro']));
   $vgc = $con->real_escape_string(htmlentities($_POST['vgc']));
   $fol = $con->real_escape_string(htmlentities($_POST['fol']));
   $linea = $con->real_escape_string(htmlentities($_POST['linea']));

   $fecha_act = date("Y-m-d H:i:s");
   $user = $_SESSION['id'];

      $FOLIOS = $_POST['FTC'];

   //ARREGLO DE FOLIOS
   $count = count($FOLIOS);

    if (empty($count)) {
       header('location:../extend/alerta.php?msj=Selecciona por lo menos una casilla&c=adm&p=vp&t=error');
    }else {

      for($i = 0; $i < $count; $i++){
        //echo $FOLIOS[$i]."<br>";
        $estatus = 'L';
        $estatus2 = 'P';
        $id = '';
        //echo $centro;
          /*ACTUALIZAMOS EL NUMERO DE FOLIO TABLA DESCRIPCION DE LA VERIFICACIÓN*/
        $up_desver = $con->prepare("UPDATE verificaciones_pro SET folio_notifica=? WHERE id=? ");
        $up_desver->bind_param("si", $fol, $FOLIOS[$i]);
        $up_desver->execute();
        $up_desver->close();
        /* ACTUALIZAMOS ESTATUS DE LA TABLA DETALLE DE CALENDARIO*/
        $up = $con->prepare("UPDATE detalle_cal SET estatus=? WHERE id_ver=? ");
        $up->bind_param("si", $estatus, $FOLIOS[$i]);
        $up->execute();
        $up->close();

        /* INSERT REGISTRO DEL ACTA*/
        $ruta = "";
        $in_ver = $con->prepare("INSERT INTO actas_not VALUES (?,?,?,?,?,?,?,?,?,?)");
        $in_ver->bind_param("iisssssiss", $id, $FOLIOS[$i], $cen, $fecha_act, $estatus, $estatus2, $user, $vgc, $linea, $ruta);
        $in_ver->execute();
        $in_ver->close();
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
        $mail->FromName = "OFICIO NOTIFICACIÓN";

        //CONDICIONAL PARA ENVIO DE CORREOS
        if (($cen == 'SCT_BCN') || ($cen == 'SCT_CHH') || ($cen == 'SCT_COA') || ($cen == 'SCT_DUR') || ($cen == 'SCT_NLE') || ($cen == 'SCT_SLP') || ($cen == 'SCT_SON') || ($cen == 'SCT_TAM') || ($cen == 'SCT_ZAC')) {
          // code...
          $mail->AddAddress("emartgab@sct.gob.mx","Eliut Martinez Gabriel");
          $mail->AddAddress("abrianop@sct.gob.mx","Alfredo Briano Perez ");
          $mail->AddBCC('jose.lopezy@sct.gob.mx',"Jose Luis Lopez Amaya");
          $mail->AddBCC('miguelhr290986@gmail.com',"Desarrollo");
        }
        elseif (($cen == 'SCT_AGU') || ($cen == 'SCT_CMX') || ($cen == 'SCT_COL') || ($cen == 'SCT_MEX') || ($cen == 'SCT_GUA') || ($cen == 'SCT_HID') || ($cen == 'SCT_JAL') || ($cen == 'SCT_MIC') || ($cen == 'SCT_NAY') || ($cen == 'SCT_QUE') || ($cen == 'SCT_SIN')) {
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
        $body = file_get_contents("../plantillas/notifica_oficio.html");
        $mail->Subject = "OFICIO DE NOTIFICACIÓN";

        $sustituir_A = "%VG%";
        $por_A = trim(utf8_decode($vgc));
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
          header('location:../extend/alerta.php?msj=Datos Registrados&c=adm&p=vp&t=success');
          }

    }
  }
  else {
  header('location:../extend/alerta.php?msj=Utiiza el Formulario&c=adm&p=vp&t=error');
  }

  ?>
