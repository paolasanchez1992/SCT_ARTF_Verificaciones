<?php
//SELECCIONAMOS LA CONEXION
include '../conexion/conexion.php';
include '../funciones/centros.php';
//MANDAMOS A LLAMAR EL PROCESADOR DE PHPWORD
require_once dirname(__FILE__).'/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

use PhpOffice\PhpWord\TemplateProcessor;

//RECIBIMO LA VARIABLE ID_VERIFICACION
$id_ver = $con->real_escape_string(htmlentities($_GET['id']));

$templateWord = new TemplateProcessor('machotes/oficio_comision.docx');

//SELECCIONAMOS DATOS PARA LLENAR DOCUMENTO
$sel = $con->prepare("SELECT * FROM descripcion_ver WHERE id = ? ");
$sel->bind_param('s', $id_ver);
$sel->execute();
$res = $sel->get_result();
if ($f = $res->fetch_assoc()) {
}

$sel_cal = $con->prepare("SELECT * FROM detalle_cal WHERE id_ver = ? ");
$sel_cal->bind_param('s', $id_ver);
$sel_cal->execute();
$res_cal = $sel_cal->get_result();
if ($f_cal = $res_cal->fetch_assoc()) {
}

$centro = $f['id_centro'];
//Nombre del Estado
$nombre_c = ucwords(strtolower (operaciones($centro)));

//Fecha en que se genera el Oficio de Notificacion

$dia = date('d'); $me = date('m'); $ano = date('Y');

if ($me == '01') {$mes = 'enero';}
if ($me == '02') {$mes = 'febrero';}
if ($me == '03') {$mes = 'marzo';}
if ($me == '04') {$mes = 'abril';}
if ($me == '05') {$mes = 'mayo';}
if ($me == '06') {$mes = 'junio';}
if ($me == '07') {$mes = 'julio';}
if ($me == '08') {$mes = 'agosto';}
if ($me == '09') {$mes = 'septiembre';}
if ($me == '10') {$mes = 'octubre';}
if ($me == '11') {$mes = 'noviembre';}
if ($me == '12') {$mes = 'diciembre';}

//verificador
$verificador = $_SESSION['nombre'];
$jefe_dep =  ucwords(strtolower ($verificador));

// VGCF
$vgcf =  ucwords(strtolower ($f['vgcf']));

//Dia de la semana
$dia_semana = jddayofweek ( cal_to_jd(CAL_GREGORIAN, date("m"),date("d"), date("Y")) , 1 );

if (($dia_semana == 'Monday') || ($dia_semana == 'Tuesday') || ($dia_semana == 'Wednesday') || ($dia_semana == 'Thursday') || ($dia_semana == 'Friday')) {
  $visita = 'ordinaria';
}else {
  $visita = 'extraordinaria';
}

//Fecha en que se realiza la verificacion

$fecha_r = $f_cal['fecha'];


$string = $fecha_r;
$I1=$string[0];$I2=$string[1];$I3=$string[2];$I4=$string[3];$I5=$string[4];
$I6=$string[5];$I7=$string[6];$I8=$string[7];$I9=$string[8];$I10=$string[9];

$ano1 = $I1.$I2.$I3.$I4;
$mes1 = $I6.$I7;
$dia1 = $I9.$I10;

if ($mes1 == '01') {$mes1n = 'enero';} if ($mes1 == '02') {$mes1n = 'febrero';} if ($mes1 == '03') {$mes1n = 'marzo';}
if ($mes1 == '04') {$mes1n = 'abril';} if ($mes1 == '05') {$mes1n = 'mayo';}    if ($mes1 == '06') {$mes1n = 'junio';}
if ($mes1 == '07') {$mes1n = 'julio';} if ($mes1 == '08') {$mes1n = 'agosto';}  if ($mes1 == '09') {$mes1n = 'septiembre';}
if ($mes1 == '10') {$mes1n = 'octubre';} if ($mes1 == '11') {$mes1n = 'noviembre';} if ($mes1 == '12') {$mes1n = 'diciembre';}

//Oficio de Acreditacion
$oficio_a = '6.27.416.0021/2019';

//Formato de Fecha
$fecha_formato = date("d/m/Y", strtotime($fecha_r));
//hora de encuentro
$hora = $f_cal['hora'];
//objeto
//$texto = "Verificar que el equipo ferroviario previamente al inicio de operaciones sea inspeccionado (condiciones f&iacute;sicas y mec&aacute;nicas) y autorizado para su movimiento por V&iacute;as F&eacute;rreas, por personal calificado (acreditaci&oacute;n y capacitaci&oacute;n), conforme a su Reglamento Interno de Transporte y de Frenos de Aire; as&iacute; como, que dicho equipo porte matricula asignada por la autoridad competente.";
//linea
$linea = $f['linea'];
//km inicial
$km_ini = $f['km_ini'];
//KM final
$km_fin = $f['km_fin'];
//lugar de Reunion
$lugar = $f_cal['lugar'];

$templateWord->setValue('estado',$nombre_c);
$templateWord->setValue('dia',$dia);
$templateWord->setValue('mes',$mes);
$templateWord->setValue('ano',$ano);
$templateWord->setValue('nombre',$jefe_dep);
$templateWord->setValue('vgcf',$vgcf);
$templateWord->setValue('dia1',$dia1);
$templateWord->setValue('mes1',$mes1n);
$templateWord->setValue('ano1',$ano1);
$templateWord->setValue('visita',$visita);
$templateWord->setValue('fecha',$fecha_formato);
$templateWord->setValue('hora',$hora);
$templateWord->setValue('linea',$linea);
$templateWord->setValue('km_ini',$km_ini);
$templateWord->setValue('km_fin',$km_fin);
$templateWord->setValue('lugar',$lugar);


// --- Guardamos el documento
$templateWord->saveAs('generados/oficio_comision.docx');

header("Content-Disposition: attachment; filename=oficio_comision.docx; charset=iso-8859-1");
echo file_get_contents('generados/oficio_comision.docx');


 ?>
