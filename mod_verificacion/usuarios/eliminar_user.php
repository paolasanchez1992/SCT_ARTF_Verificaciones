<?php
include '../conexion/conexion.php';

  $id = $con->real_escape_string(htmlentities($_POST['id']));
  $del = $con->query("DELETE FROM usuarios WHERE id = '$id' ");

  if($del){
    header('location:../extend/alerta.php?msj=Registro eliminado&c=us&p=in&t=success');
  }else {
    header('location:../extend/alerta.php?msj=Regostro no eliminado&c=us&p=in&t=error');
  }
  $con->close();

?>
