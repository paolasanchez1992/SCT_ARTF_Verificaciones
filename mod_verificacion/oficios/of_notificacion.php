<?php
//SELECCIONAMOS LA CONEXION
include '../conexion/conexion.php';
include '../funciones/centros.php';
header("Content-Type: text/html; charset=utf-8");
//MANDAMOS A LLAMAR EL PROCESADOR DE PHPWORD
require_once dirname(__FILE__).'/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

use PhpOffice\PhpWord\TemplateProcessor;

//RECIBIMO LA VARIABLE ID_VERIFICACION
$linea = $con->real_escape_string(htmlentities($_GET['linea']));

$templateWord = new TemplateProcessor('machotes/oficio_notificacion.docx');

$estatus = 'P';
//SELECCIONAMOS DATOS PARA LLENAR DOCUMENTO
$sel = $con->prepare("SELECT * FROM vista_actanotificacion WHERE estatus_gen = ? AND linea = ? ");
$sel->bind_param('ss', $estatus, $linea);
$sel->execute();
$res = $sel->get_result();
if ($f = $res->fetch_assoc()) {
}





//NUMERO DE Oficio
$n_oficio = $f['folio_notifica'];

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
//$verificador = $_SESSION['nombre'];
//$jefe_dep =  ucwords(strtolower ($verificador));

// VGCF
$vgcf =  $f['vgcf'];
$sel_v = $con->query("SELECT concesion FROM vgcf WHERE id = '$vgcf' ");
  while ($f_v = $sel_v->fetch_assoc()) {
    $n_vgcf = utf8_decode($f_v['concesion']);
}


$templateWord->setValue('dia',$dia);
$templateWord->setValue('mes',$mes);
$templateWord->setValue('ano',$ano);
$templateWord->setValue('vgcf',$n_vgcf);
$templateWord->setValue('nof',$n_oficio);





$sel_d = $con->query("SELECT COUNT(id) AS nvisitas FROM vista_actanotificacion WHERE estatus_gen = '$estatus' AND linea = '$linea' ");
  while ($f_d = $sel_d->fetch_assoc()) {
    $nvistas = $f_d['nvisitas'];
}

$templateWord->setValue('nov',$nvistas);

  $A=1;
   $sel_vista = $con->query("SELECT * FROM vista_actanotificacion WHERE estatus_gen = '$estatus' AND linea = '$linea' ");
   while ($f_vista = $sel_vista->fetch_array()) {
    $A += 1;
   $area = 'area'.$A;
   $fec = 'fec'.$A;
   $hor = 'hor'.$A;
   $are = 'are'.$A;
   $lin = 'lin'.$A;
   $kmi = 'kmi'.$A;
   $kmf = 'kmf'.$A;
   $ldr = 'ldr'.$A;


   $templateWord->setValue($area,$f_vista['id_centro']);
   $templateWord->setValue($fec,$f_vista['fecha']);
   $templateWord->setValue($hor,$f_vista['hora']);
   $templateWord->setValue($are,$f_vista['area_ver']);
   $templateWord->setValue($lin,$f_vista['linea']);
   $templateWord->setValue($kmi,$f_vista['km_ini']);
   $templateWord->setValue($kmf,$f_vista['km_fin']);
   $templateWord->setValue($ldr,$f_vista['lugar']);

   }







//Fecha en que se realiza la verificacion



//Formato de Fecha
//$fecha_formato = date("d/m/Y", strtotime($fecha_r));
//hora de encuentro
//$hora = $f_cal['hora'];
//objeto
//$texto = "Verificar que el equipo ferroviario previamente al inicio de operaciones sea inspeccionado (condiciones f&iacute;sicas y mec&aacute;nicas) y autorizado para su movimiento por V&iacute;as F&eacute;rreas, por personal calificado (acreditaci&oacute;n y capacitaci&oacute;n), conforme a su Reglamento Interno de Transporte y de Frenos de Aire; as&iacute; como, que dicho equipo porte matricula asignada por la autoridad competente.";
//linea
//$linea = $f['linea'];
//km inicial
//$km_ini = $f['km_ini'];
//KM final
//$km_fin = $f['km_fin'];
//lugar de Reunion
//$lugar = $f_cal['lugar'];

//$templateWord->setValue('estado',$nombre_c); $n_oficio

/*
$vgcf =  $f['vgcf'];
$sel_des = $con->query("SELECT COUNT(id) AS nvisitas FROM vista_actanotificacion WHERE estatus_gen = '$estatus' AND linea = '$linea'  ");
  while ($f_des = $sel_des->fetch_assoc()) {

    $centro = $f_des['id_centro'];
    //Nombre del Estado
    $nombre_c = ucwords(strtolower (operaciones($centro)));

    //$templateWord->setValue('centro',$nombre_c);



}



/*
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
*/

// --- Guardamos el documento
$templateWord->saveAs('generados/oficio_notificacion.docx');

header("Content-Disposition: attachment; filename=oficio_notificacion.docx; charset=iso-8859-1");
echo file_get_contents('generados/oficio_notificacion.docx');


 ?>
