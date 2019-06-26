<?php
include '../extend/header.php';
include '../funciones/centros.php';
include '../funciones/piv.php';
?>


<div class="row">

</div>
  <!--BUSCAR USUARIOS -->
  <div class="row">
    <div class="col s12">
      <nav class="grey lighten-1">
        <div class="nav-wrapper">
          <div class="input-field">
            <input type="search" id="buscar" autocomplete="off">
             <label for="buscar"><i class="material-icons">search</i></label>
             <i class="material-icons">close</i>
          </div>
        </div>
      </nav>

    </div>

  </div>


  <!--MOSTRAR USUARIOS -->
  <?php
  $NA = '2';$NB = '7';$NC = '8';$ND = '10';$NE = '19';$NF = '24';$NG = '26';$NH = '28';$NI = '32';
  $CA = '1';$CB = '5';$CC = '9';$CD = '11';$CE = '12';$CF = '14';$CG = '15';$CH = '16';$CI = '18';$CJ = '22';$CK = '25';
  $SA = '4';$SB = '6';$SC = '17';$SD = '20';$SE = '21';$SF = '27';$SG = '29';$SH = '30';$SI = '31';

    $estatus = 'R';


    if ($_SESSION['nivel'] == 'ADMIN') {
      $sel = $con->prepare("SELECT * FROM detalle_cal");
    }
    elseif ($_SESSION['nivel'] == 'DIRECTORN') {
      $sel = $con->prepare("SELECT * FROM detalle_cal WHERE id_centro IN (?,?,?,?,?,?,?,?,?) AND estatus = ? ");
      $sel->bind_param('iiiiiiiiis', $NA, $NB, $NC, $ND, $NE, $NF, $NG, $NH, $NI, $estatus );
    }elseif ($_SESSION['nivel'] == 'DIRECTORC') {
      $sel = $con->prepare("SELECT * FROM detalle_cal WHERE id_centro IN (?,?,?,?,?,?,?,?,?,?,?) AND estatus = ? ");
      $sel->bind_param('iiiiiiiiiiis', $CA, $CB, $CC, $CD, $CE, $CF, $CG, $CH, $CI, $CJ, $CK, $estatus );
    }
    elseif ($_SESSION['nivel'] == 'DIRECTORS') {
      $sel = $con->prepare("SELECT * FROM detalle_cal WHERE id_centro IN (?,?,?,?,?,?,?,?,?) AND estatus = ? ");
      $sel->bind_param('iiiiiiiiis', $SA, $SB, $SC, $SD, $SE, $SF, $SG, $SH, $SI, $estatus);
    }
      $sel->execute();
      $res = $sel->get_result();
      $row = mysqli_num_rows($res);
  ?>
  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-image">

        </div>
        <div class="card-content">
          <span class="card-title" style="color: #000000;">NO. DE VERIFICACIONES (<?php echo $row ?>) <center><h4>VERIFICACIONES CONFIRMADAS </h4></center></span>

          <table class="centered responsive-table highlight">
            <thead>
              <tr class="cabecera">

              <th>CENTRO</th>
              <th>FECHA INICIO</th>
              <th>FECHA TÉRMINO</th>
              <th>DÍAS DE VERIFICACIÓN</th>
              <th>LUGAR DE REUNIÓN</th>
              <th>HORA DE ENCUENTRO</th>
              <th></th>
            </tr>
            </thead>
            <?php

              while ($f = $res->fetch_assoc()) {

                $centro = $f['id_centro'];
                $nom_centro = nombre_centro($centro);

                $fecha1 = $f['fecha'];
                $fecha2 = $f['fecha_f'];
                $dias = diferenciaDias($fecha1,$fecha2);
                if ($dias == '0') {
                  $dias='1';
                }
                else {
                  $dias=$dias+1;
                }



              ?>
                <input type="hidden" name="centro" value="<?php echo $f['id_centro'] ?>">
              <tr>

                <td><?php echo $nom_centro ?></td>
                <td><?php echo date("d/m/Y", strtotime($fecha1)) ?></td>
                <td><?php echo date("d/m/Y", strtotime($fecha2)) ?></td>
                <td><?php echo $dias?></td>
                <td><?php echo strtoupper($f['lugar']) ?></td>
                <td><?php echo $f['hora']." HORA LOCAL" ?></td>
                <td>
                <button data-target="modal_des" class="btn-floating btn modal-trigger green tooltipped" data-position="top" data-delay="50" data-tooltip="DESCRIPCIÓN DEL PROGRAMA" onclick="enviades(this.value)" value="<?php echo $f['id_ver'] ?>"><i class="material-icons">sms</i></button>

                </tr>

            <?php } ?>

          </table>

        </div>
      </div>
    </div>
  </div>

  <!-- MODALES -->


  <div id="modal_des" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>Información</h4>
    <div class="modal_des">

    </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
  </div>
  </div>

<?php include '../extend/scripts.php'; ?>

<script>
function editcal(valor) {
 $.get('modal_edcal.php',{
   id:valor,

   beforeSend: function() {
     $('.modal_ed').html("Espere un momento por favor...");
     }
   },function(respuesta) {
     $('.modal_ed').html(respuesta);
   });
 }

 function enviades(valor) {
  $.get('../verificacion/modal_descripcion.php',{
    id:valor,

    beforeSend: function() {
      $('.modal_des').html("Espere un momento por favor...");
      }
    },function(respuesta) {
      $('.modal_des').html(respuesta);
    });
  }
</script>

</body>
</html>
