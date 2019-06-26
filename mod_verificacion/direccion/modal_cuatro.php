<?php
include '../conexion/conexion.php';

//include '../extend/permiso.php';

  $id_centro = $con->real_escape_string(htmlentities($_GET['id']));

  $sel = $con->prepare("SELECT * FROM servicios_a WHERE id_centro = ? ");
  $sel->bind_param('s', $id_centro);
  $sel->execute();
  $res = $sel->get_result();

 ?>

<div class="row">
 <div class="col s12">
  <div class="card">
    <div class="card-content">
      <h4>Servicios Auxiliares</h4>

     <table class="responsive-table highlight">
       <thead>
         <tr class="green lighten-2 centered ">
           <th colspan="3">UBICACIÓN</th>
           <th>TIPO</th>
           <th>SERVICIOS QUE PRESTA</th>
           <th></th>
           <th colspan="2">IDENTIFICACIÓN DE QUIEN OPERA</th>
         </tr>

       </thead>
       <tr class="green darken-4 centered ">
          <th>Línea</th>
          <th>Kilometraje</th>
          <th>Domicilio</th>
          <th>(Terminales de pasajeros, Terminales de Carga, Transbordo y Transvace , Talleres de mantenimiento equipo ferroviario y Centros de Abasto,)</th>
          <th>(Terminales de pasajeros: Recepción , formación o salida de trenes ,  Terminales de Carga: General o especializada; Transbordo y Transvace: liquidos, Talleres de mantenimiento equipo ferroviario :  De acuerdo al servicio que presta y equipo ferroviario al que se presta.)</th>
          <th>Nombre y/o Razon Social</th>
          <th>Empresa Ferroviaria</th>
          <th>Tercero</th>
       </tr>

       <?php while ($f = $res->fetch_assoc()) { ?>

         <tr>
          <td><?php echo $f['linea'] ?></td>
          <td><?php echo $f['kilometraje'] ?></td>
          <td><?php echo $f['domicilio'] ?></td>
          <td><?php echo $f['tipo'] ?></td>
          <td><?php echo $f['servicio_p'] ?></td>
          <td><?php echo $f['nombre'] ?></td>
          <td><?php echo $f['empresa_f'] ?></td>
          <td><?php echo $f['tercero'] ?></td>

         </tr>

       <?php }?>

     </table>



    </div>
   </div>
  </div>
</div>
