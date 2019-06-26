<?php
include '../conexion/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  foreach ($_POST as $campo => $valor) {
    $variable = "$" . $campo. "='" . htmlentities($valor). "';";
    eval($variable);
  }

  //Generar Consecutivo para numero de captura PIV

   $sel_fol = $con->query("SELECT MAX(id) as id FROM consecutivos WHERE id_estado = '$id_centro' ");
              while ($f_fol = $sel_fol->fetch_assoc()) {
                     $id_fo = $f_fol['id'];
              }
   $sel_fol = $con->query("SELECT numero FROM consecutivos WHERE id ='$id_fo' ");
              while ($f_fol = $sel_fol->fetch_assoc()) {
                     $numero = $f_fol['numero'];
  }


    $n2=1;
    $num_ver=$numero+$n2;

    $id = '';
    $kmr = $kmF - $kmi;
    $esta1 = 'I';
    $esta2 = 'I';
    $vacio = '';
    $fecha = date("Y-m-d H:i:s");
    $verificador = $_SESSION['id'];
    $vacio = '1';

      /*INSERT CONSECUTIVOS */
     $ins_fo = $con->prepare("INSERT INTO consecutivos VALUES (?,?,?)");
     $ins_fo->bind_param("iii", $id, $id_centro, $num_ver);
     /* INSERT REGISTROS PIV */
     $in_ver = $con->prepare("INSERT INTO verificaciones_pro VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
     $in_ver->bind_param("iiiiiiiiiiiiissssisssssisi", $id, $id_centro, $num_ver, $tipo_ver, $mes, $area, $objeto, $alcance, $funda, $doc, $emp, $vgcf, $linea, $tramo, $kmi, $kmF, $kmr, $dias, $obs, $esta1, $esta2, $vacio, $fecha, $verificador, $fecha, $verificador);

     if (($in_ver->execute()) && ($ins_fo->execute())) {
          header('location:../extend/alerta.php?msj=Datos Registrados&c=ver&p=cpiv&t=success');
     }else {
      header('location:../extend/alerta.php?msj=Datos no Registrados&c=ver&p=cpiv&t=error');
     }

     $ins_fo->close();
     $in_ver->close();
     $con->close();

}
else {
header('location:../extend/alerta.php?msj=Utiiza el Formulario&c=ver&p=cpiv&t=error');
}
