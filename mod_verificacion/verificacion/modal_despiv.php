<?php

include '../conexion/conexion.php';
include '../funciones/piv.php';

//include '../extend/permiso.php';

  $id = $con->real_escape_string(htmlentities($_GET['id']));

  $sel = $con->prepare("SELECT * FROM verificaciones_pro WHERE id = ? ");
  $sel->bind_param('i', $id);
  $sel->execute();
  $res = $sel->get_result();

 ?>

<div class="row">
 <div class="col s12">
  <div class="card">
    <div class="card-content">
     <h4>Datos</h4>

     <table class="responsive-table highlight">
       <thead>
       <tr>
         <th>EMPRESA</th>
         <th>VGCF</th>
         <th>LÍNEA</th>
         <th>TRAMO</th>
         <th>DEL KM</th>
         <th>AL KM</th>
         <th>KM RED</th>
         <th>DÍAS DE VERIFICACIÓN</th>
         <th>OBSERVACIONES</th>
       </tr>
       </thead>

       <?php while ($f = $res->fetch_assoc()) {
         $empresa = $f['empresa'];
         $vgcf = $f['vgcf'];
         $linea = $f['linea'];

         $empresa_nom = empresa($empresa);
         $vgcf_nom = vgcf($vgcf);
         $linea_nom = linea($linea);


         ?>

         <tr>
           <td class="tooltipped" data-position="bottom"><?php echo  $empresa_nom ?></td>
           <td><?php echo $vgcf_nom  ?></td>
           <td><?php echo $linea_nom ?></td>
           <td><?php echo $f['tramo'] ?></td>
           <td><?php echo $f['km_ini'] ?></td>
           <td><?php echo $f['km_fin'] ?></td>
           <td><?php echo $f['km_redf'] ?></td>
           <td><?php echo $f['dias_ver'] ?></td>
           <td><?php echo $f['observaciones'] ?></td>

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
