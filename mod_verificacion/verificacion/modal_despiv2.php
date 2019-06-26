<?php

include '../conexion/conexion.php';
include '../funciones/piv.php';

//include '../extend/permiso.php';

  $id = $con->real_escape_string(htmlentities($_GET['id']));

  $sel = $con->prepare("SELECT * FROM verificaciones_pro WHERE id = ?");
  $sel->bind_param('s', $id);
  $sel->execute();
  $res = $sel->get_result();

 ?>

<div class="row">
 <div class="col s12">
  <div class="card">
    <div class="card-content">
     <h4>Datos</h4>

     <table class="responsive-table striped">
       <thead>
       <tr>
         <th>ÁREA DE VERIFICACIÓN</th>
         <th>OBJETO DE VERIFICACIÓN</th>
         <th>ALCANCE DE VERIFICACIÓN</th>
         <th>FUNDAMENTO DE VERIFICACIÓN</th>
         <th>DOCUMENTACIÓN DE VERIFICACIÓN</th>
       </tr>
       </thead>

       <?php while ($f = $res->fetch_assoc()) {

         $area = $f['area_ver'];
         $obje = $f['objeto_ver'];
         $alca = $f['alcance_ver'];
         $fund = $f['fun_ver'];
         $docv = $f['doc_ver'];

         $area_ver = area2($area);
         $obje_ver = objeto($obje);
         $alca_ver = alcance($alca);
         $fund_ver = fundamento($fund);
         $docv_ver = documenta($docv);
         ?>

         <tr>

           <td><?php echo $area_ver  ?></td>
           <td><?php echo $obje_ver ?></td>
           <td><?php echo $alca_ver ?></td>
           <td><?php echo $fund_ver ?></td>
           <td><?php echo $docv_ver ?></td>


         </tr>

       <?php }?>

     </table>



    </div>
   </div>
  </div>
</div>

<script>
    $('.tooltipped').tooltip();
</script>
