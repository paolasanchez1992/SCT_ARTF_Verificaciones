<?php
include '../conexion/conexion.php';
//error_reporting(E_ALL ^ E_NOTICE);
//error_reporting(0);

//mandamos a trael el nick
$fecha = $con->real_escape_string($_POST['fecha']);
//realizamos el Select

//echo $fecha;

$dia=date("w", strtotime($fecha));
//echo "<label style='color:red;'>".$dia."</label>";

echo "<script>alert('funcionando'); </script>";


/*
$sel = $con->query("SELECT id FROM usuarios WHERE nick='$nick' ");
$row = mysqli_num_rows($sel);
 if($row != 0){
   echo "<label style='color:red;'>EL NOMBRE DE USUARIO YA EXISTE</label>";
 }else {
   echo "<label style='color:green;'>EL NOMBRE DE USUARIO ESTA DISPONIBLE</label>";
 }
 $con->close();
 */
 ?>
