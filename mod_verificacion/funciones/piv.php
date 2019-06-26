
<?php
  //header("Content-Type: text/html; charset=utf-8");
function mes($mes)
{

  include '../conexion/conexion.php';
  $sel = $con->query("SELECT * FROM mes WHERE id = '$mes' ");
   $row = mysqli_num_rows($sel);
   while ($f = $sel->fetch_assoc()) {
     $mes = $f['nombre'];
   }
  return $mes;
}

function area($area)
{

  include '../conexion/conexion.php';
  $sel = $con->query("SELECT * FROM area_ver WHERE id = '$area' ");
   $row = mysqli_num_rows($sel);
   while ($f = $sel->fetch_assoc()) {
     $area = $f['nombre'];
   }
  return $area;
}

function vgcf($vgcf)
{

  include '../conexion/conexion.php';
  $sel = $con->query("SELECT * FROM vgcf_piv WHERE id = '$vgcf' ");
   $row = mysqli_num_rows($sel);
   while ($f = $sel->fetch_assoc()) {
     $vgcf = $f['vgcf'];
   }
  return $vgcf;
}

function empresa($empresa)
{

  include '../conexion/conexion.php';
  $sel = $con->query("SELECT * FROM empresas_piv WHERE id = '$empresa' ");
   $row = mysqli_num_rows($sel);
   while ($f = $sel->fetch_assoc()) {
     $empresa = $f['empresa'];
   }
  return $empresa;
}

function linea($linea)
{

  include '../conexion/conexion.php';
  $sel = $con->query("SELECT * FROM linea_piv WHERE id = '$linea' ");
   $row = mysqli_num_rows($sel);
   while ($f = $sel->fetch_assoc()) {
     $linea = $f['linea'];
   }
  return $linea;
}

function area2($area)
{

  include '../conexion/conexion.php';
  $sel = $con->query("SELECT * FROM area_ver WHERE id = '$area' ");
   $row = mysqli_num_rows($sel);
   while ($f = $sel->fetch_assoc()) {
     $area = $f['nombre'];
   }
  return $area;
}

function objeto($obje)
{

  include '../conexion/conexion.php';
  $sel = $con->query("SELECT * FROM objetos WHERE id = '$obje' ");
   $row = mysqli_num_rows($sel);
   while ($f = $sel->fetch_assoc()) {
     $obje = $f['descripcion'];
   }
  return $obje;
}

function alcance($alca)
{

  include '../conexion/conexion.php';
  $sel = $con->query("SELECT * FROM alcance WHERE id = '$alca' ");
   $row = mysqli_num_rows($sel);
   while ($f = $sel->fetch_assoc()) {
     $alca = $f['descripcion'];
   }
  return $alca;
}

function fundamento($fund)
{

  include '../conexion/conexion.php';
  $sel = $con->query("SELECT * FROM fundamentos WHERE id = '$fund' ");
   $row = mysqli_num_rows($sel);
   while ($f = $sel->fetch_assoc()) {
     $fund = $f['descripcion'];
   }
  return $fund;
}

function documenta($docv)
{

  include '../conexion/conexion.php';
  $sel = $con->query("SELECT * FROM documentacion WHERE id = '$docv' ");
   $row = mysqli_num_rows($sel);
   while ($f = $sel->fetch_assoc()) {
     $docv = $f['descripcion'];
   }
  return $docv;
}

function nombre_centro($centro)
{

  include '../conexion/conexion.php';
  $sel = $con->query("SELECT * FROM centros_sct WHERE id_estado = '$centro' ");
   $row = mysqli_num_rows($sel);
   while ($f = $sel->fetch_assoc()) {
     $centro = $f['nombre_centro'];
   }
  return $centro;
}


function verificador($verificador)
{

  include '../conexion/conexion.php';
  $sel = $con->query("SELECT * FROM usuarios WHERE id = '$verificador' ");
   $row = mysqli_num_rows($sel);
   while ($f = $sel->fetch_assoc()) {
     $verificador = $f['nombre'];
   }
  return $verificador;
}


?>
