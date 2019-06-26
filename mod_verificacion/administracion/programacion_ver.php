<?php
include '../extend/header.php';
include '../funciones/centros.php';
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
    $NA = 'SCT_BCN';$NB = 'SCT_CHH';$NC = 'SCT_COA';$ND = 'SCT_DUR';$NE = 'SCT_NLE';$NF = 'SCT_SLP';$NG = 'SCT_SON';$NH = 'SCT_TAM';$NI = 'STC_ZAC';
    $CA = 'SCT_AGU';$CB = 'SCT_CMX';$CC = 'SCT_COL';$CD = 'SCT_MEX';$CE = 'SCT_GUA';$CF = 'SCT_HID';$CG = 'SCT_JAL';$CH = 'SCT_MIC';$CI = 'STC_NAY';$CJ = 'SCT_QUE';$CK = 'STC_SIN';
    $SA = 'SCT_CAM';$SB = 'SCT_CHP';$SC = 'SCT_MOR';$SD = 'SCT_OAX';$SE = 'SCT_PUE';$SF = 'SCT_TAB';$SG = 'SCT_TLA';$SH = 'SCT_VER';$SI = 'STC_YUC';
    $estatus = 'R';


    if ($_SESSION['nivel'] == 'DIRECTOR') {
      $sel = $con->prepare("SELECT * FROM detalle_cal WHERE estatus = ? ");
      $sel->bind_param('s', $estatus );
    }
    elseif ($_SESSION['nivel'] == 'DIRECTORN') {
      $sel = $con->prepare("SELECT * FROM detalle_cal WHERE id_centro IN (?,?,?,?,?,?,?,?,?) AND estatus = ? ");
      $sel->bind_param('ssssssssss', $NA, $NB, $NC, $ND, $NE, $NF, $NG, $NH, $NI, $estatus );
    }elseif ($_SESSION['nivel'] == 'DIRECTORC') {
      $sel = $con->prepare("SELECT * FROM detalle_cal WHERE id_centro IN (?,?,?,?,?,?,?,?,?,?,?) AND estatus = ? ");
      $sel->bind_param('ssssssssssss', $CA, $CB, $CC, $CD, $CE, $CF, $CG, $CH, $CI, $CJ, $CK, $estatus );
    }
    elseif ($_SESSION['nivel'] == 'DIRECTORS') {
      $sel = $con->prepare("SELECT * FROM detalle_cal WHERE id_centro IN (?,?,?,?,?,?,?,?,?) AND estatus = ? ");
      $sel->bind_param('ssssssssss', $SA, $SB, $SC, $SD, $SE, $SF, $SG, $SH, $SI, $estatus);
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
          <span class="card-title" style="color: #000000;">NO. DE VERIFICACIONES (<?php echo $row ?>) <center><h4>VERIFICACIONES PROGRAMADAS</h4></center></span>
          <form  action="env_ver.php" method="post" name="masivo">
          <table class="centered responsive-table highlight">
            <thead>
              <tr class="cabecera">
                <th></th>
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
               $A=1;
              while ($f = $res->fetch_assoc()) {
                $A += 1;
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
                <td> <input type="checkbox" name="FTC[]" id="<?php echo $A?>" value="<?php echo $f['id_ver'] ?>"/>
                 <label for="<?php echo $A ?>"></label></td>
                <td><?php echo $f['id_centro'] ?></td>
                <td><?php echo date("d/m/Y", strtotime($fecha1)) ?></td>
                <td><?php echo date("d/m/Y", strtotime($fecha2)) ?></td>
                <td><?php echo $dias?></td>
                <td><?php echo strtoupper($f['lugar']) ?></td>
                <td><?php echo $f['hora']." HORA LOCAL" ?></td>
                <td>
                  <button data-target="modal_des" class="btn-floating btn modal-trigger green tooltipped" data-position="top" data-delay="50" data-tooltip="DESCRIPCIÓN DEL PROGRAMA" onclick="enviades(this.value)" value="<?php echo $f['id_ver'] ?>"><i class="material-icons">sms</i></button>
                  <button data-target="modal_cal" class="btn-floating btn modal-trigger amber accent-3 tooltipped" data-position="top" data-delay="50" data-tooltip="Editar Verificación" onclick="editcal(this.value)" value="<?php echo $f['id_ver']; ?>"><i class="material-icons">border_color</i></button></td>

                </tr>

            <?php } ?>

          </table>
          <button type="button" class="btn green" onclick="swal({ title: 'Estas seguro de Enviar los registros a Dirección?', text: 'Al enviarlos ya no hay marcha atras!', type: 'warning', showCancelButton: true, confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Si enviar!' }).then(function () { document.masivo.submit();  })"><i class="material-icons left">send</i>ENVIAR</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- MODALES -->
  <div id="modal_cal" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>Información</h4>
    <div class="modal_ed">

    </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
  </div>
  </div>

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
 $.get('../subdireccion/modal_edcal.php',{
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
