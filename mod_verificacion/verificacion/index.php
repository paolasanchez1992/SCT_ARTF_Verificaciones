<?php
include '../extend/header.php';
include '../funciones/centros.php';
include '../funciones/piv.php';

//include '../conexion/tiempo.php';
$verificador = $_SESSION['id'];
$nom_verificador = verificador($verificador);
//SELECCIONAMOS LOS DATOS DEL CALENDARIO
$sel_ver = $con->prepare("SELECT * FROM detalle_cal WHERE verificador = ? ORDER BY fecha ASC ");
$sel_ver->bind_param('i', $verificador);
$sel_ver->execute();
$res = $sel_ver->get_result();


?>

<div class="row">
 <div class="col s12">

    <?php
     while($row = $res->fetch_assoc()) {
       $id_ver = $row['id_ver'];
       $centro = $row['id_centro'];
       $fecha1 = $row['fecha'];
       $fecha2 = $row['fecha_f'];
       $estatus = $row['estatus'];

       $nom_centro = nombre_centro($centro);


       if ($estatus == 'T') {
         // code...
         $color = 'grey lighten-5';
       }elseif ($estatus == 'S') {
         // code...
         $color = 'amber lighten-5';
       }elseif ($estatus == 'D') {
         // code...
         $color = 'amber lighten-3';
       }elseif ($estatus == 'R') {
         // code...
         $color = 'orange lighten-3';
       }elseif ($estatus == 'A') {
         // code...
         $color = 'light-green lighten-4';
       }elseif ($estatus == 'L') {
         // code...
         $color = 'green light-green';
       }


       $string=$fecha1;
       $A1=$string[0]; $A2=$string[1]; $A3=$string[2]; $A4=$string[3]; $A5=$string[4];
       $A6=$string[5]; $A7=$string[6]; $A8=$string[7]; $A9=$string[8]; $A10=$string[9];
       $m1 = $A6.$A7;
       $dia = $A9.$A10;
       $mes = obtenermes($m1);
       $dias = diferenciaDias($fecha1,$fecha2);
       if ($dias == '0') {
         $dias='1';
       }
       else {
         $dias=$dias+1;
       }

     ?>




     <div class="col s12 m12 l3">
        <div class="card horizontal <?php echo $color ?>">
          <div class="card-image">
            <img src="../img/calendario/<?php echo $dia ?>.png"><p class="center"><strong><?php echo $mes ?></strong></p>
          </div>
          <div class="card-stacked">
            <div class="card-content">


              <p>Centro SCT: <strong><?php echo $nom_centro ?></strong><br>
                               Lugar de Reunión: <strong><?php echo strtoupper($row['lugar']) ?></strong><br>
                               Hora de Reunión: <strong><?php echo strtoupper($row['hora']) ?></strong><br>
                               Fecha de Inicio: <strong><?php echo date("d/m/Y", strtotime($row['fecha'] )) ?></strong><br>
                               Fecha de Termino: <strong><?php echo date("d/m/Y", strtotime($row['fecha_f']))  ?></strong><br>
                               Días de verificación: <strong><?php echo $dias ?></strong><br>
                               Jefe de Departamento: <strong><?php echo $nom_verificador ?></strong>

                            </p>




            </div>
            <div class="card-action">
                  <?php
                  //verificar que el aviso de notificación se cierre
                  $sel_acta = $con->prepare("SELECT * FROM actas_not WHERE id_ver = ?");
                  $sel_acta->bind_param('i', $id_ver);
                  $sel_acta->execute();
                  $res1 = $sel_acta->get_result();

                   while($row1 = $res1->fetch_assoc()) {
                     $estatus = $row1['estatus_gen'];
                     //if ($estatus == 'F') {

                  ?>
              <a href="../oficios/of_comision.php?id=<?php echo $row['id_ver'] ?>" class="btn-floating light-blue darken-4 tooltipped" data-position="top" data-delay="50" data-tooltip="Oficio de Comisión"><i class="material-icons">
description</i></a>

                      <?php
                     //}
                    }
                    ?>

            </div>
          </div>
        </div>
      </div>

<?php } ?>


  </div>
</div>



<?php include '../extend/scripts.php'; ?>






</body>
</html>
