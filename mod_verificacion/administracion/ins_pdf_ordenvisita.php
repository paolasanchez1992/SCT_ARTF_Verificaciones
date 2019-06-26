<?php
include '../conexion/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $fecha = date("Y-m-d H:i:s");
  $id_ver = $con->real_escape_string(htmlentities($_POST['id_ver']));
  $vgcf = $con->real_escape_string(htmlentities($_POST['vgcf']));

  $sel_v = $con->query("SELECT folio_notifica FROM descripcion_ver WHERE id = '$id_ver' ");
    while ($f_v = $sel_v->fetch_assoc()) {
      $folio = $f_v['folio_notifica'];
  }



  $rt=$folio;
  $extension = '';
  $ruta = '../oficios/orden_visitas/';
  $archivo = $_FILES['foto']['tmp_name'];
  $nombrearchivo = $_FILES['foto']['name'];
  $info = pathinfo($nombrearchivo);
  if ($archivo != '') {
    $extension = $info['extension'];
    if ($extension == 'pdf' || $extension == 'PDF') {
      move_uploaded_file($archivo,'../oficios/orden_visitas/'.$rt.'.'.$extension);
      $ruta = $ruta."/".$rt.'.'.$extension;
    }else {
      header('location:../extend/alerta.php?msj=El formato del archivo no es valido&c=adm&p=act&t=error');
      exit;
    }
  }else {
    header('location:../extend/alerta.php?msj=Archivo no Seleccionado&c=adm&p=act&t=error');
    exit;
  }


    $id = '';
    //$est = 'T';

    $sel = $con->query("SELECT * FROM actas_not");
      while ($f = $sel->fetch_assoc()) {

        $up = $con->prepare("UPDATE actas_not SET ruta=? WHERE vgcf=? ");
        $up->bind_param("si", $ruta, $vgcf);
        $up->execute();

    }

    header('location:../extend/alerta.php?msj=Archivo Almacenado satisfactoriamente&c=adm&p=act&t=success');

    $up->close();
    $con->close();

}else {
  header('location:../extend/alerta.php?msj=Utiiza el Formulario&c=adm&p=act&t=error');
}

 ?>
