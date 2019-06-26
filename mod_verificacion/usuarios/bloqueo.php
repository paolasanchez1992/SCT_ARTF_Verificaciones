<?php
include '../conexion/conexion.php';
$user = $_SESSION['nick'];
$up = $con->query("UPDATE usuarios SET bloqueo=0 WHERE nick='$user' ");

if ($up) {
  $_SESSION = array();
  session_destroy();
   header('location:../extend/alerta.php?msj=USO INDEVIDO DEL SISTEMA&c=salir&p=salir&t=error');
}

echo $user;

 ?>
