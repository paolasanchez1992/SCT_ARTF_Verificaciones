<?php
include '../conexion/conexion.php';
include '../funciones/piv.php';


  require('../pdf/fpdf.php');

    $centro = $con->real_escape_string(htmlentities($_GET['id_sct']));
    $nombre_e = nombre_centro($centro);


  //Create new pdf file pagina vertical
  //$pdf=new FPDF('P','mm','A4');
  //pagina horizontal
  $pdf=new FPDF('L','mm','A4');
  header("Content-Type: text/html; charset=iso-8859-1 ");
  //Disable automatic page break
  $pdf->SetAutoPageBreak(false);


  //Add first page
  $pdf->AddPage();
  $pdf->Image('../img/logo_inicio2.jpg',10,10,55);
  //$pdf->Image('doc/capacidad_pago_secpub.jpg',10,45,200,250);

  $pdf->SetFillColor(255,255,255);
  $pdf->SetFont('Arial','B',10);

  $pdf->Cell(290,45,'Programa Integral de  Supervisión y Verificación al Servicio Público de Transporte Ferroviario- PIV 2019',0,1,'C');

  $pdf->SetY(13);
  $pdf->SetX(190);
  $pdf->Cell(1,1,"Secretaría de Comunicaciones y  Transportes",0,0,'L');

  $pdf->SetY(16.5);
  $pdf->SetX(187.5);
  $pdf->Cell(1,1,"Agencia Reguladora del Transporte Ferroviario",0,0,'L');

  $pdf->SetFont('Arial','B',8);
  $pdf->SetY(36);
  $pdf->SetX(130);
  $pdf->Cell(1,1,$nombre_e,0,0,'L');

  $pdf->SetFont('Arial','B',10);
  $pdf->SetY(40);
  $pdf->SetX(115);
  $pdf->Cell(1,1,"Anexo 2: Verificación  Regular 2019",0,0,'L');

  $pdf->SetFont('Arial','B',8);
  $pdf->SetY(50);
  $pdf->SetX(10);
  $pdf->Cell(1,1,"ID",0,0,'L');


  $pdf->SetY(50);
  $pdf->SetX(21);
  $pdf->Cell(1,1,"MES",0,0,'L');


  $pdf->SetY(50);
  $pdf->SetX(45);
  $pdf->Cell(1,1,"ÁREA",0,0,'L');


  $pdf->SetY(50);
  $pdf->SetX(91);
  $pdf->Cell(1,1,"VGCF",0,0,'L');

  $pdf->SetY(50);
  $pdf->SetX(113.5);
  $pdf->Cell(1,1,"EMPRESA",0,0,'L');

  $pdf->SetY(50);
  $pdf->SetX(150);
  $pdf->Cell(1,1,"TRAMO",0,0,'L');

  $pdf->SetY(50);
  $pdf->SetX(207);
  $pdf->Cell(1,1,"LÍNEA",0,0,'L');

  $pdf->SetY(50);
  $pdf->SetX(228);
  $pdf->Cell(1,1,"DEL KM",0,0,'L');

  $pdf->SetY(50);
  $pdf->SetX(244);
  $pdf->Cell(1,1,"AL KM",0,0,'L');

  $pdf->SetY(50);
  $pdf->SetX(256);
  $pdf->Cell(1,1,"RED KM",0,0,'L');

  $pdf->SetY(50);
  $pdf->SetX(277);
  $pdf->Cell(1,1,"DÍAS",0,0,'L');

  $sel_m12 = $con->query("SELECT * FROM verificaciones_pro WHERE estatus_ini = 'F' AND id_centro = '$centro' ");
  $row = mysqli_num_rows($sel_m12);

  $Y = '60';
  $X = '20';

   while ($f12 = $sel_m12->fetch_assoc()) {
     $mes = $f12['mes_ver'];
     $mes_nom = mes($mes);
     $area = $f12['area_ver'];
     $area_ver = area2($area);
     $empresa = $f12['empresa'];
     $empresa_nom = empresa($empresa);
     $vgcf = $f12['vgcf'];
     $vgcf_nom = vgcf($vgcf);
     $linea = $f12['linea'];
     $linea_nom = linea($linea);

     $pdf->SetFont('Arial','B',6);
     $pdf->SetY($Y);
     $pdf->SetX(10);
     $pdf->Cell(1,1,$f12['numero_ver'],0,0,'L');

     $pdf->SetFont('Arial','B',6);
     $pdf->SetY($Y);
     $pdf->SetX(20);
     $pdf->Cell(1,1,$mes_nom,0,0,'L');

     $pdf->SetFont('Arial','B',6);
     $pdf->SetY($Y);
     $pdf->SetX(40);
     $pdf->Cell(1,1,utf8_decode($area_ver),0,0,'L');

     $pdf->SetFont('Arial','B',6);
     $pdf->SetY($Y);
     $pdf->SetX(95);
     $pdf->Cell(1,1,utf8_decode($vgcf_nom),0,0,'L');

     $pdf->SetFont('Arial','B',6);
     $pdf->SetY($Y);
     $pdf->SetX(120);
     $pdf->Cell(1,1,utf8_decode($empresa_nom),0,0,'L');

     $pdf->SetFont('Arial','B',6);
     $pdf->SetY($Y);
     $pdf->SetX(145);
     $pdf->Cell(1,1,utf8_decode($f12['tramo']),0,0,'L');

     $pdf->SetFont('Arial','B',6);
     $pdf->SetY($Y);
     $pdf->SetX(210);
     $pdf->Cell(1,1,utf8_decode($linea_nom),0,0,'L');

     $pdf->SetFont('Arial','B',6);
     $pdf->SetY($Y);
     $pdf->SetX(230);
     $pdf->Cell(1,1,$f12['km_ini'],0,0,'L');

     $pdf->SetFont('Arial','B',6);
     $pdf->SetY($Y);
     $pdf->SetX(245);
     $pdf->Cell(1,1,$f12['km_fin'],0,0,'L');

     $pdf->SetFont('Arial','B',6);
     $pdf->SetY($Y);
     $pdf->SetX(260);
     $pdf->Cell(1,1,$f12['km_redf'],0,0,'L');

     $pdf->SetFont('Arial','B',6);
     $pdf->SetY($Y);
     $pdf->SetX(280);
     $pdf->Cell(1,1,$f12['dias_ver'],0,0,'L');


   if ($f12['numero_ver'] == '12') {
     $pdf->AddPage();
     $Y = 10;
     $X = 10;
   }elseif ($f12['numero_ver'] == '29') {
     $pdf->AddPage();
     $Y = 10;
     $X = 10;
   }

    $Y += 10;
    $X += 10;
   }


  $modo="I";
  $nombre_archivo="PROGRAMA INTEGRAL DE VERIFICACION"."-".".pdf";
  $pdf->Output($nombre_archivo,$modo);


  //$con->close();




 ?>
