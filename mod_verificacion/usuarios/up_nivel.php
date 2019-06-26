<?php
include '../conexion/conexion.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $con->real_escape_string(htmlentities($_POST['id']));
  $nivel = $con->real_escape_string(htmlentities($_POST['nivel']));

  $up = $con->query("UPDATE usuarios SET nivel='$nivel' where id='$id' ");
  if($up){
    header('location:../extend/alerta.php?msj=Nivel actualizado&c=us&p=in&t=success');
  }else {
    header('location:../extend/alerta.php?msj=Nivel no actualizado&c=us&p=in&t=error');
  }
  $con->close();
}else {
  header('location:../extend/alerta.php?msj=Utiiza el Formulario&c=us&p=in&t=error');
}

?>
