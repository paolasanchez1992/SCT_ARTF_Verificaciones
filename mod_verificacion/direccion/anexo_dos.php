<?php
include '../extend/header.php';
include '../funciones/piv.php';
//include '../conexion/tiempo.php';
//header('Content-Type: text/html; charset=UTF-8');

$centro = $con->real_escape_string(htmlentities($_GET['id_sct']));
$nombre_e = nombre_centro($centro);

$sel = $con->query(" SELECT COUNT(numero_ver) AS infraestructura, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '2' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '1') AS operacion, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '3' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '1') AS equipo, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '4' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '1') AS servicio from verificaciones_pro WHERE area_ver = '1' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '1' ");
 $row = mysqli_num_rows($sel);
 while ($f = $sel->fetch_assoc()) {
   $infra = $f['infraestructura']; $opera = $f['operacion']; $equip = $f['equipo']; $servi = $f['servicio'];
 }

$sel_m2 = $con->query("SELECT COUNT(numero_ver) AS infraestructura, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '2' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '2') AS operacion, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '3' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '2') AS equipo, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '4' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '2') AS servicio FROM verificaciones_pro WHERE area_ver = '1' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '2' ");
 $row = mysqli_num_rows($sel_m2);
 while ($f2 = $sel_m2->fetch_assoc()) {
   $infra2 = $f2['infraestructura']; $opera2 = $f2['operacion']; $equip2 = $f2['equipo']; $servi2 = $f2['servicio'];
 }

 $sel_m3 = $con->query("SELECT COUNT(numero_ver) AS infraestructura, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '2' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '3') AS operacion, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '3' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '3') AS equipo, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '4' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '3') AS servicio FROM verificaciones_pro WHERE area_ver = '1' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '3' ");
  $row = mysqli_num_rows($sel_m3);
  while ($f3 = $sel_m3->fetch_assoc()) {
    $infra3 = $f3['infraestructura']; $opera3 = $f3['operacion']; $equip3 = $f3['equipo']; $servi3 = $f3['servicio'];
  }

  $sel_m4 = $con->query("SELECT COUNT(numero_ver) AS infraestructura, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '2' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '4') AS operacion, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '3' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '4') AS equipo, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '4' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '4') AS servicio FROM verificaciones_pro WHERE area_ver = '1' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '4' ");
   $row = mysqli_num_rows($sel_m4);
   while ($f4 = $sel_m4->fetch_assoc()) {
     $infra4 = $f4['infraestructura']; $opera4 = $f4['operacion']; $equip4 = $f4['equipo']; $servi4 = $f4['servicio'];
   }

   $sel_m5 = $con->query("SELECT COUNT(numero_ver) AS infraestructura, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '2' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '5') AS operacion, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '3' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '5') AS equipo, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '4' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '5') AS servicio FROM verificaciones_pro WHERE area_ver = '1' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '5' ");
    $row = mysqli_num_rows($sel_m5);
    while ($f5 = $sel_m5->fetch_assoc()) {
      $infra5 = $f5['infraestructura']; $opera5 = $f5['operacion']; $equip5 = $f5['equipo']; $servi5 = $f5['servicio'];
    }

    $sel_m6 = $con->query("SELECT COUNT(numero_ver) AS infraestructura, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '2' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '6') AS operacion, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '3' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '6') AS equipo, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '4' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '6') AS servicio FROM verificaciones_pro WHERE area_ver = '1' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '6' ");
     $row = mysqli_num_rows($sel_m6);
     while ($f6 = $sel_m6->fetch_assoc()) {
       $infra6 = $f6['infraestructura']; $opera6 = $f6['operacion']; $equip6 = $f6['equipo']; $servi6 = $f6['servicio'];
     }

     $sel_m7 = $con->query("SELECT COUNT(numero_ver) AS infraestructura, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '2' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '7') AS operacion, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '3' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '7') AS equipo, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '4' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '7') AS servicio FROM verificaciones_pro WHERE area_ver = '1' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '7' ");
      $row = mysqli_num_rows($sel_m7);
      while ($f7 = $sel_m7->fetch_assoc()) {
        $infra7 = $f7['infraestructura']; $opera7 = $f7['operacion']; $equip7 = $f7['equipo']; $servi7 = $f7['servicio'];
      }

      $sel_m8 = $con->query("SELECT COUNT(numero_ver) AS infraestructura, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '2' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '8') AS operacion, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '3' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '8') AS equipo, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '4' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '8') AS servicio FROM verificaciones_pro WHERE area_ver = '1' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '8' ");
       $row = mysqli_num_rows($sel_m8);
       while ($f8 = $sel_m8->fetch_assoc()) {
         $infra8 = $f8['infraestructura']; $opera8 = $f8['operacion']; $equip8 = $f8['equipo']; $servi8 = $f8['servicio'];
       }

       $sel_m9 = $con->query("SELECT COUNT(numero_ver) AS infraestructura, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '2' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '9') AS operacion, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '3' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '9') AS equipo, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '4' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '9') AS servicio FROM verificaciones_pro WHERE area_ver = '1' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '9' ");
        $row = mysqli_num_rows($sel_m9);
        while ($f9 = $sel_m9->fetch_assoc()) {
          $infra9 = $f9['infraestructura']; $opera9 = $f9['operacion']; $equip9 = $f9['equipo']; $servi9 = $f9['servicio'];
        }

        $sel_m10 = $con->query("SELECT COUNT(numero_ver) AS infraestructura, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '2' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '10') AS operacion, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '3' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '10') AS equipo, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '4' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '10') AS servicio FROM verificaciones_pro WHERE area_ver = '1' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '10' ");
         $row = mysqli_num_rows($sel_m10);
         while ($f10 = $sel_m10->fetch_assoc()) {
           $infra10 = $f10['infraestructura']; $opera10 = $f10['operacion']; $equip10 = $f10['equipo']; $servi10 = $f10['servicio'];
         }

         $sel_m11 = $con->query("SELECT COUNT(numero_ver) AS infraestructura, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '2' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '11') AS operacion, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '3' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '11') AS equipo, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '4' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '11') AS servicio FROM verificaciones_pro WHERE area_ver = '1' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '11' ");
          $row = mysqli_num_rows($sel_m11);
          while ($f11 = $sel_m11->fetch_assoc()) {
            $infra11 = $f11['infraestructura']; $opera11 = $f11['operacion']; $equip11 = $f11['equipo']; $servi11 = $f11['servicio'];
          }

          $sel_m12 = $con->query("SELECT COUNT(numero_ver) AS infraestructura, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '2' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '12') AS operacion, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '3' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '12') AS equipo, (SELECT COUNT(numero_ver) FROM verificaciones_pro WHERE area_ver = '4' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '12') AS servicio FROM verificaciones_pro WHERE area_ver = '1' AND estatus_ini = 'F' AND id_centro = '$centro' AND mes_ver = '12' ");
           $row = mysqli_num_rows($sel_m12);
           while ($f12 = $sel_m12->fetch_assoc()) {
             $infra12 = $f12['infraestructura']; $opera12 = $f12['operacion']; $equip12 = $f12['equipo']; $servi12 = $f12['servicio'];
           }








?>

<div class="row">
 <div class="col s12">
  <div class="card">
    <div class="card-content">
     <span class="card-title"></span>


     <div class="row">


        <div class="col s12 m12">
          <div class="card">
            <div class="card-image">

            </div>
            <div class="card-content">
              <span class="card-title center"><strong>PROGRAMA DE VERIFICACIÓN  <?php echo strtoupper($nombre_e) ?></strong></span>

              <table class="responsive-table centered highlight">
   <caption>ANEXO 2</caption>

   <thead> <!-- Pasajeros del vuelo 377 -->
       <tr>
           <th>ÁREA DE VERIFICACIÓN</th>
           <th>ENE</th>
           <th>FEB</th>
           <th>MAR</th>
           <th>ABR</th>
           <th>MAY</th>
           <th>JUN</th>
           <th>JUL</th>
           <th>AGO</th>
           <th>SEP</th>
           <th>OCT</th>
           <th>NOV</th>
           <th>DIC</th>
           <th>TOTAL</th>
           <th>INICIALES</th>
           <th>SEGUIMIENTO MS</th>

       </tr>
   </thead>



   <tbody> <!-- Cuerpo de la tabla -->
       <tr>
           <td style="text-align: left;">INFRAESTRUCTURA</td>
           <td><?php echo $infra; ?></td>
           <td><?php echo $infra2; ?></td>
           <td><?php echo $infra3; ?></td>
           <td><?php echo $infra4; ?></td>
           <td><?php echo $infra5; ?></td>
           <td><?php echo $infra6; ?></td>
           <td><?php echo $infra7; ?></td>
           <td><?php echo $infra8; ?></td>
           <td><?php echo $infra9; ?></td>
           <td><?php echo $infra10; ?></td>
           <td><?php echo $infra11; ?></td>
           <td><?php echo $infra12; ?></td>
           <td><?php echo $suma = $infra+$infra2+$infra3+$infra4+$infra5+$infra6+$infra7+$infra8+$infra9+$infra10+$infra11+$infra12; ?></td>
           <td><?php echo $suma; ?></td>
           <td></td>
        <tr>
           <td style="text-align: left;">OPERACIÓN/EQUIPO EN TRANSITO</td>
           <td><?php echo $opera; ?></td>
           <td><?php echo $opera2; ?></td>
           <td><?php echo $opera3; ?></td>
           <td><?php echo $opera4; ?></td>
           <td><?php echo $opera5; ?></td>
           <td><?php echo $opera6; ?></td>
           <td><?php echo $opera7; ?></td>
           <td><?php echo $opera8; ?></td>
           <td><?php echo $opera9; ?></td>
           <td><?php echo $opera10; ?></td>
           <td><?php echo $opera11; ?></td>
           <td><?php echo $opera12; ?></td>
           <td><?php echo $suma2 = $opera+$opera2+$opera3+$opera4+$opera5+$opera6+$opera7+$opera8+$opera9+$opera10+$opera11+$opera12; ?></td>
           <td><?php echo $suma2; ?></td>
           <td></td>
          </tr>
       <tr>
           <td style="text-align: left;">EQUIPO ANTES DE SU SALIDA</td>
           <td><?php echo $equip; ?></td>
           <td><?php echo $equip2; ?></td>
           <td><?php echo $equip3; ?></td>
           <td><?php echo $equip4; ?></td>
           <td><?php echo $equip5; ?></td>
           <td><?php echo $equip6; ?></td>
           <td><?php echo $equip7; ?></td>
           <td><?php echo $equip8; ?></td>
           <td><?php echo $equip9; ?></td>
           <td><?php echo $equip10; ?></td>
           <td><?php echo $equip11; ?></td>
           <td><?php echo $equip12; ?></td>
           <td><?php echo $suma3 = $equip+$equip2+$equip3+$equip4+$equip5+$equip6+$equip7+$equip8+$equip9+$equip10+$equip11+$equip12; ?></td>
           <td><?php echo $suma3; ?></td>
           <td></td>
       </tr>
       <tr>
           <td style="text-align: left;">SERVICIOS AUXILIARES</td>
           <td><?php echo $servi; ?></td>
           <td><?php echo $servi2; ?></td>
           <td><?php echo $servi3; ?></td>
           <td><?php echo $servi4; ?></td>
           <td><?php echo $servi5; ?></td>
           <td><?php echo $servi6; ?></td>
           <td><?php echo $servi7; ?></td>
           <td><?php echo $servi8; ?></td>
           <td><?php echo $servi9; ?></td>
           <td><?php echo $servi10; ?></td>
           <td><?php echo $servi11; ?></td>
           <td><?php echo $servi12; ?></td>
           <td><?php echo $suma4 = $servi+$servi2+$servi3+$servi4+$servi5+$servi6+$servi7+$servi8+$servi9+$servi10+$servi11+$servi12; ?></td>
           <td><?php echo $suma4; ?></td>
           <td></td>
       </tr>

       <tr>
           <td style="text-align: left;">TOTALES</td>
           <td><?php echo $T1 = $infra+$opera+$equip+$servi; ?></td>
           <td><?php echo $T2 = $infra2+$opera2+$equip2+$servi2; ?></td>
           <td><?php echo $T3 = $infra3+$opera3+$equip3+$servi3; ?></td>
           <td><?php echo $T4 = $infra4+$opera4+$equip4+$servi4; ?></td>
           <td><?php echo $T5 = $infra5+$opera5+$equip5+$servi5; ?></td>
           <td><?php echo $T6 = $infra6+$opera6+$equip6+$servi6; ?></td>
           <td><?php echo $T7 = $infra7+$opera7+$equip7+$servi7; ?></td>
           <td><?php echo $T8 = $infra8+$opera8+$equip8+$servi8 ?></td>
           <td><?php echo $T9 = $infra9+$opera9+$equip9+$servi9 ?></td>
           <td><?php echo $T10 = $infra10+$opera10+$equip10+$servi10; ?></td>
           <td><?php echo $T11 = $infra11+$opera11+$equip11+$servi11; ?></td>
           <td><?php echo $T12 = $infra12+$opera12+$equip12+$servi12; ?></td>
           <td><?php echo $suma5 = $T1+$T2+$T3+$T4+$T5+$T6+$T7+$T8+$T9+$T10+$T11+$T12; ?></td>
           <td><?php echo $suma5; ?></td>
           <td></td>
       </tr>

   </tbody>
</table>



            </div>
            <div class="card-action">
              <button data-target="modal_des" class="btn-floating btn modal-trigger teal darken-4 tooltipped" data-position="top" data-delay="50" data-tooltip="DESCRIPCIÓN DEL PROGRAMA" onclick="enviades(this.value)" value="<?php echo $centro ?>"><i class="material-icons">assignment</i></button>
              <a href="graf_piv.php?id_sct=<?php echo $centro?>" class="btn-floating  waves-effect teal darken-4 tooltipped" target="_blank" data-position="top" data-delay="50" data-tooltip="GRÁFICA DE VERIFICACIÓN"><i class="material-icons">assessment</i></a>
              <a href="rep_piv_pdf.php?id_sct=<?php echo $centro?>" class="btn-floating  waves-effect  red darken-4 tooltipped" target="_blank" data-position="top" data-delay="50" data-tooltip="PROGRAMA PIV"><i class="material-icons">picture_as_pdf</i></a>

            </div>
          </div>
        </div>



      </div>

      <div class="row">
        <div class="col s12">
         <div class="card">
           <div class="card-content">
            <span class="card-title"></span>
            <div id="grafica"></div>
          </div>
         </div>
        </div>
      </div>

    </div>
   </div>
  </div>

</div>



<!-- MODALES -->
<div id="modal_des" class="modal modal-fixed-footer">
<div class="modal-content">
  <h4>Información</h4>
  <div class="res_modal_des">

  </div>
</div>
<div class="modal-footer">
  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
</div>
</div>

<?php include '../extend/scripts.php'; ?>
<script>
function enviades(valor) {
 $.get('modal_des.php',{
   id:valor,

   beforeSend: function() {
     $('.res_modal_des').html("Espere un momento por favor...");
     }
   },function(respuesta) {
     $('.res_modal_des').html(respuesta);
   });
 }
</script>



</body>
</html>
