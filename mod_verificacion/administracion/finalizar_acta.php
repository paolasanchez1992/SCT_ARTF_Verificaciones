<?php
include '../conexion/conexion.php';
//error_reporting(0);

$vgcf = $con->real_escape_string(htmlentities($_GET['vgcf']));

if (empty($vgcf)) {

    header('location:../extend/alerta.php?msj=Utiiza el Formulario&c=adm&p=act&t=error');

}else {

  $estatus_gen = 'F';

  $up = $con->prepare("UPDATE actas_not SET estatus_gen=? WHERE vgcf=? ");
  $up->bind_param("ss", $estatus_gen, $vgcf);

  if ($up->execute()) {
   header('location:../extend/alerta.php?msj=Acta Finalizada&c=adm&p=act&t=success');
  }else {
   header('location:../extend/alerta.php?msj=Acta no Finalizada&c=adm&p=act&t=error');
  }

  $up->close();
   $con->close();
}

?>
