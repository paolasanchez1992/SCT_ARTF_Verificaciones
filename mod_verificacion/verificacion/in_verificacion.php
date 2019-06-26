<?php
include '../conexion/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


  foreach ($_POST as $campo => $valor) {
    $variable = "$" . $campo. "='" . htmlentities($valor). "';";
    eval($variable);
  }

$id = '';
$verificador = $_SESSION['nombre'];

$sel_centro = $con->query("SELECT id_centro FROM descripcion_ver WHERE id = '$id_ver' ");
 while ($f_centro = $sel_centro->fetch_assoc()) {
  $id_centro = $f_centro['id_centro'];
 }

if ($est == 'B') {
  //code...
  $estatus='F';

   /* INSERT VERIFICACIONES */
   $in_ver = $con->prepare("INSERT INTO verificaciones VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
   $in_ver->bind_param("issssssssssssss", $id, $id_ver, $id_centro, $estatus, $tipo_v, $clase, $calibre, $fijacion, $durmiente, $laminado, $oficio, $oficioc, $fecha, $actai, $verificador);

   if ($in_ver->execute()) {
        header('location:../extend/alerta.php?msj=Datos Registrados&c=ver&p=in&t=success');
   }else {
        header('location:../extend/alerta.php?msj=Datos no Registrados&c=ver&p=in&t=error');
   }

   $in_ver->close();
   $con->close();

  }
  elseif ($est == 'A') {
    // code...
    $estatus = 'I';
    $estatus2 = 'P';

     /* INSERT VERIFICACIONES E INCIDENCIAS */
     $in_ver = $con->prepare("INSERT INTO verificaciones VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
     $in_ver->bind_param("issssssssssssss", $id, $id_ver, $id_centro, $estatus, $tipo_v, $clase, $calibre, $fijacion, $durmiente, $laminado, $oficio, $oficioc, $fecha, $actai, $verificador);

     $in_ire = $con->prepare("INSERT INTO irregularidades VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
     $in_ire->bind_param("isssssssssssss", $id, $id_ver, $id_centro, $estatus2, $placa, $placaf, $pl, $des, $des2, $des3, $plazod, $fechac, $des4, $verificador);


     if ($in_ver->execute() && $in_ire->execute()) {
          header('location:../extend/alerta.php?msj=Datos Registrados&c=ver&p=in&t=success');
     }else {
          header('location:../extend/alerta.php?msj=Datos no Registrados&c=ver&p=in&t=error');
     }

     $in_ver->close();
     $in_ire->close();
     $con->close();

  }


}
else {
header('location:../extend/alerta.php?msj=Utiiza el Formulario&c=ver&p=in&t=error');
}
