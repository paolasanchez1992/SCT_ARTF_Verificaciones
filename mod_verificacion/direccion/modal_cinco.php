<?php
include '../conexion/conexion.php';

//include '../extend/permiso.php';

  $id_centro = $con->real_escape_string(htmlentities($_GET['id']));

    $sel_c = $con->prepare("SELECT * FROM cruces WHERE id_centro = ? ");
    $sel_c->bind_param('s', $id_centro);
    $sel_c->execute();
    $res_c = $sel_c->get_result();
    if ($f_c = $res_c->fetch_assoc()) { }

  $sel = $con->prepare("SELECT * FROM cruces_res WHERE id_centro = ? ");
  $sel->bind_param('s', $id_centro);
  $sel->execute();
  $res = $sel->get_result();

 ?>

<div class="row">
 <div class="col s12">
  <div class="card">
    <div class="card-content">

     <h4>Cruces a Nivel</h4>
     <p>Total de Cruces a nivel = <?php echo $f_c['total_c'] ?></p>
     <p>Cruces autorizados <?php echo $f_c['cruces_true'] ?></p>
     <p> Cruces no autorizados = <?php echo $f_c['cruces_false'] ?></p>

     <table class="responsive-table highlight">
       <tr class="green lighten-2">
         <th></th>
         <th colspan="2">UBICACIÓN</th>
         <th colspan="3">ESTATUS</th>


       </tr>
      <tr class="green darken-4">
        <th>No.*</th>
        <th>Línea</th>
        <th>Kilometraje</th>
        <th>Autorizado</th>
        <th>No autorizado </th>
        <th>Fecha de última Verificación</th>
      </tr>
       </thead>



       <?php while ($f = $res->fetch_assoc()) { ?>

         <tr>
          <td><?php echo $f['no'] ?></td>
          <td><?php echo $f['linea'] ?></td>
          <td><?php echo $f['kilometraje'] ?></td>
          <td><?php echo $f['autorizado'] ?></td>
          <td><?php echo $f['n_autorizado'] ?></td>
          <td><?php echo $f['ultima_ver'] ?></td>

         </tr>

       <?php }?>

     </table>



    </div>
   </div>
  </div>
</div>
