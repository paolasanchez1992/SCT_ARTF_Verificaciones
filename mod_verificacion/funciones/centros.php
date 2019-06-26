<?php



function operaciones($centro) {

if ($centro == 'SCT_AGU') {
  $nom_centro = 'AGUASCALIENTES';
}elseif ($centro == 'SCT_BCN') {
    $nom_centro = 'BAJA CALIFORNIA';
}elseif ($centro == 'SCT_BCS') {
    $nom_centro = 'BAJA CALIFORNIA SUR';
}elseif ($centro == 'SCT_CAM') {
    $nom_centro = 'CAMPECHE';
}elseif ($centro == 'SCT_CMX') {
    $nom_centro = 'CIUDAD DE MEXICO';
}elseif ($centro == 'SCT_CHP') {
    $nom_centro = 'CHIAPAS';
}elseif ($centro == 'SCT_CHH') {
    $nom_centro = 'CHIHUAHUA';
}elseif ($centro == 'SCT_COA') {
    $nom_centro = 'COAHUILA';
}elseif ($centro == 'SCT_COL') {
    $nom_centro = 'COLIMA';
}elseif ($centro == 'SCT_DUR') {
    $nom_centro = 'DURANGO';
}elseif ($centro == 'SCT_MEX') {
    $nom_centro = 'ESTADO DE MEXICO';
}elseif ($centro == 'SCT_GUA') {
    $nom_centro = 'GUANAJUATO';
}elseif ($centro == 'SCT_GRO') {
    $nom_centro = 'GUERRERO';
}elseif ($centro == 'SCT_HID') {
    $nom_centro = 'HIDALGO';
}elseif ($centro == 'SCT_JAL') {
    $nom_centro = 'JALISCO';
}elseif ($centro == 'SCT_MIC') {
    $nom_centro = 'MICHOACAN';
}elseif ($centro == 'SCT_MOR') {
    $nom_centro = 'MORELOS';
}elseif ($centro == 'SCT_NAY') {
    $nom_centro = 'NAYARIT';
}elseif ($centro == 'SCT_NLE') {
    $nom_centro = 'NUEVO LEON';
}elseif ($centro == 'SCT_OAX') {
    $nom_centro = 'OAXACA';
}elseif ($centro == 'SCT_PUE') {
    $nom_centro = 'PUEBLA';
}elseif ($centro == 'SCT_QUE') {
    $nom_centro = 'QUERETARO';
}elseif ($centro == 'SCT_ROO') {
    $nom_centro = 'QUINTANA ROO';
}elseif ($centro == 'SCT_SLP') {
    $nom_centro = 'SAN LUIS POTOSI';
}elseif ($centro == 'SCT_SIN') {
    $nom_centro = 'SINALOA';
}elseif ($centro == 'SCT_SON') {
    $nom_centro = 'SONORA';
}elseif ($centro == 'SCT_TAB') {
    $nom_centro = 'TABASCO';
}elseif ($centro == 'SCT_TAM') {
    $nom_centro = 'TAMAULIPAS';
}elseif ($centro == 'SCT_TLA') {
    $nom_centro = 'TLAXCALA';
}elseif ($centro == 'SCT_VER') {
    $nom_centro = 'VERACRUZ';
}elseif ($centro == 'SCT_YUC') {
    $nom_centro = 'YUCATAN';
}elseif ($centro == 'SCT_ZAC') {
    $nom_centro = 'ZACATECAS';
}

return $nom_centro; // Devolver el resultado

}

function diferenciaDias($fecha1,$fecha2)
{
    $inicio = strtotime($fecha1);
    $fin = strtotime($fecha2);
    $dif = $fin - $inicio;
    $diasFalt = (( ( $dif / 60 ) / 60 ) / 24);
    return ceil($diasFalt);
}

function obtenermes($m1)
{
  if ($m1 == '01') { $m1 = 'enero'; }
  elseif ($m1 == '02') { $m1 = 'febrero';  }
  elseif ($m1 == '03') { $m1 = 'marzo';  }
  elseif ($m1 == '04') { $m1 = 'abril';  }
  elseif ($m1 == '05') { $m1 = 'mayo';  }
  elseif ($m1 == '06') { $m1 = 'junio';  }
  elseif ($m1 == '07') { $m1 = 'julio';  }
  elseif ($m1 == '08') { $m1 = 'agosto';  }
  elseif ($m1 == '09') { $m1 = 'septiembre';  }
  elseif ($m1 == '10') { $m1 = 'octubre';  }
  elseif ($m1 == '11') { $m1 = 'noviembre';  }
  elseif ($m1 == '12') { $m1 = 'diciembre';  }

  return $m1;
}

function centro($id_centro)
{
  include '../conexion/conexion.php';
  $sel = $con->query("SELECT * FROM centros_sct WHERE id = '$id_centro' ");
   $row = mysqli_num_rows($sel);
   while ($f = $sel->fetch_assoc()) {
     $id_centro = $f['nombre'];
   }
  return $id_centro;
}



function consulta($consulta)
{
  if ($consulta == '10') {
    $consulta = "id IN('2','5')";
  }

  return $consulta;

}

 ?>
