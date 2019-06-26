<?php
include '../extend/header.php';
include '../funciones/centros.php';
include '../funciones/piv.php';
//include '../conexion/tiempo.php';
$est1 = 'P';
$est2 = 'L';
//SELECCIONAMOS LOS DATOS DEL CALENDARIO
$sel_ver = $con->prepare("SELECT id_ver, vgcf, linea, ruta FROM actas_not WHERE estatus_gen = ? AND estatus_ver = ? GROUP BY vgcf ORDER BY fecha ASC");
$sel_ver->bind_param('ss', $est1, $est2);
$sel_ver->execute();
$res = $sel_ver->get_result();


?>

<div class="row">
    <div class="col s12">

      <?php
       while($row = $res->fetch_assoc()) {
         $vgcf = $row['vgcf'];
         $linea = $row['linea'];
         $id_ver = $row['id_ver'];
         $ruta = $row['ruta'];

         $nom_vgcf = vgcf($vgcf);

       ?>

      <div class="col s12 m6 l3">
        <div class="card horizontal hoverable">
          <div class="card-image"><img src="../img/docs/word.jpg"></div>
        <div class="card-stacked">
        <div class="card-content">
            <strong>Orden de Visita</strong>
          <p><strong>VGCF:<?php echo $nom_vgcf ?></strong></p>
        </div>
        <div class="card-action">

        <a href="../oficios/of_notificacion.php?linea=<?php echo $linea ?>" class="btn-floating pulse teal darken-4 tooltipped" data-position="left" data-tooltip="Orden de Visita"><i class="material-icons">assignment</i></a>
        <?php if (empty($ruta)) { ?>
        <a href="adj_documento.php?id_ver=<?php echo $id_ver ?>&vgcf=<?php echo $vgcf ?>" class="btn-floating pulse red darken-4 tooltipped" data-position="top" data-tooltip="Adjuntar Orden de Visita"><i class="material-icons">attach_file</i></a>
        <?php } ?>

        <a href="#" class="btn-floating pulse teal darken-4 tooltipped" data-position="right" data-delay="50" data-tooltip="Finalizar Orden de Visita" onclick="swal({ title: 'Estas seguro de Finalizar la Orden de Visita?', text: 'Al finalizar no hay marcha atras!', type: 'warning', showCancelButton: true, confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Si Finalizar!' }).then(function () {  location.href='finalizar_acta.php?vgcf=<?php echo $vgcf ?>';})"><i class="material-icons">cached</i></a>


        </div>
      </div>
    </div>
  </div>

    <?php }
   $con->close();
    ?>

    </div>
  </div>





<?php include '../extend/scripts.php'; ?>






</body>
</html>
