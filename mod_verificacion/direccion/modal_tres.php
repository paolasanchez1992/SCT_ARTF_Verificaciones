<?php
include '../conexion/conexion.php';

//include '../extend/permiso.php';

  $id_centro = $con->real_escape_string(htmlentities($_GET['id']));

  $sel = $con->prepare("SELECT * FROM vias_ap WHERE id_centro = ? ");
  $sel->bind_param('s', $id_centro);
  $sel->execute();
  $res = $sel->get_result();

 ?>

<div class="row">
 <div class="col s12">
  <div class="card">
    <div class="card-content">
     <h4>Vías principales y Secundarias Fuera de Operación</h4>

     <table class="responsive-table centered highlight">
       <thead>
       <tr>
          <th>Línea</th>
          <th>Del Kilometro</th>
          <th>Al Kilometro</th>
          <th>Total km</th>
          <th>Tipo de Vía</th>
          <th>Vía General de Comunicación Ferroviaria</th>
          <th>Empresa Ferroviaria</th>
          <th>Infraestructura estrategica</th>
          <th>Ubicación Infraestructura Estrategica (Línea y km)</th>
       </tr>
       </thead>

       <?php while ($f = $res->fetch_assoc()) { ?>

         <tr>
          <td><?php echo $f['linea'] ?></td>
          <td><?php echo $f['km_ini'] ?></td>
          <td><?php echo $f['km_fin'] ?></td>
          <td><?php echo $f['total_km'] ?></td>
          <td><?php echo $f['tipo_v'] ?></td>
          <td><?php echo $f['vgcf'] ?></td>
          <td><?php echo $f['empresa_f'] ?></td>
          <td><?php echo $f['infra_estra'] ?></td>
          <td><?php echo $f['ubicacion'] ?></td>

         </tr>

       <?php }?>

     </table>



    </div>
   </div>
  </div>
</div>
