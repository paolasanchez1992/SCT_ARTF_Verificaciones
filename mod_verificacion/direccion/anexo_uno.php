<?php
include '../extend/header.php';
//include '../conexion/tiempo.php';

$id_sct = $con->real_escape_string(htmlentities($_GET['id_sct']));

echo $id_sct;

$sel_img = $con->query("SELECT * FROM mapas WHERE id_centro = '$id_sct'");
    while ($f_img = $sel_img->fetch_assoc()) {
      $img = $f_img['img'];
      $nombre_e = $f_img['nombre'];
      $id_centro = $f_img['id_centro'];
    }


?>




<div class="row">
 <div class="col s12">
  <div class="card">
    <div class="card-content">
     <span class="card-title">ANEXO 1 JURISDICCIÓN</span>


     <div class="row">
        <div class="col s12 m6">
          <div class="card">
            <div class="card-image">
              <img class="materialboxed" src="<?php echo $img ?>">

            </div>
            <div class="card-content">
              <p>Mapa del la red Ferroviaria <?php echo $nombre_e?></p>
            </div>
            <div class="card-action">

            </div>
          </div>
        </div>

        <div class="col s12 m6">
          <div class="card">
            <div class="card-image">

            </div>
            <div class="card-content">
              <span class="card-title center">Composición de las Vías ferreas  <?php echo $nombre_e?></span>

              <!--MOSTRAR CVF -->
              <?php
                if ($_SESSION['nivel'] == 'ADMIN') {
                  $sel_cvf = $con->prepare("SELECT * FROM cvf");
                }else {
                  $sel_cvf = $con->prepare("SELECT * FROM cvf WHERE id_centro = ? ");
                  $sel_cvf->bind_param('i', $id_sct);
                }
                $sel_cvf->execute();
                $res_cvf = $sel_cvf->get_result();
                $row = mysqli_num_rows($res_cvf);
              ?>

              <table class="responsive-table centered highlight">
             <thead>

          <tr class="white-text" style="background-color: #691a31">

              <th>TIPO DE VÍA</th>
              <th>LONGITUD KM</th>
              <th>PARTICIPACIÓN (% TOTAL)</th>
          </tr>
        </thead>

        <?php
             while ($f_cvf = $res_cvf->fetch_assoc()) {
            ?>


          <tr>

            <td><?php echo $f_cvf['tpv'] ?></td>
            <td><?php echo $f_cvf['longitud'] ?></td>
            <td><?php echo $f_cvf['participacion'] ?></td>
          </tr>

        <?php }?>

      </table>

            </div>
            <div class="card-action">

            </div>
          </div>
        </div>


        <!--MOSTRAR INFRAESTRUCTURA -->
        <?php
          if ($_SESSION['nivel'] == 'ADMIN') {
            $sel = $con->prepare("SELECT * FROM infraestructura");
          }else {
            $sel = $con->prepare("SELECT * FROM infraestructura WHERE id_centro = ? ");
            $sel->bind_param('s', $id_sct);
          }
          $sel->execute();
          $res = $sel->get_result();
          $row = mysqli_num_rows($res);
        ?>

        <div class="row">
            <div class="col s12 m12">
              <div class="card-panel ">
                <span class="card-title center white-text">INFRAESTRUCTURA <h5>Vías principales y secundarias concesionadas</h5></span>


      <table class="responsive-table centered highlight" style="background: url(../img/body/fondot.jpg) no-repeat">
        <thead>
            <tr class="cabecera white-text" style="background-color: #27594b !important;">
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

        <?php

             while ($f = $res->fetch_assoc()) {

            ?>

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

          <div class="row">
            <div class="col s12 m12">
              <div class="card" style="background-color: #27594b !important;">
                <div class="card-content white-text">
                  <span class="card-title">INFRAESTRUCTURA</span>

                </div>
                <div class="card-action">
                  <!-- Modal Trigger -->

                 <button data-target="modal_uno" class="btn-floating btn modal-trigger blue-grey darken-4 tooltipped" data-position="top" data-delay="50" data-tooltip="Vías Auxiliares (Patios y Laderos)" onclick="enviar(this.value)" value="<?php echo $id_centro ?>"><i class="material-icons">visibility</i></button>
                  <button data-target="modal_dos" class="btn-floating btn modal-trigger blue-grey darken-4 tooltipped" data-position="top" data-delay="50" data-tooltip="Vías particulares" onclick="enviard(this.value)" value="<?php echo $id_centro ?>"><i class="material-icons">visibility</i></button>
                   <button data-target="modal_tres" class="btn-floating btn modal-trigger blue-grey darken-4 tooltipped" data-position="top" data-delay="50" data-tooltip="Vías principales y secundarias fuera de operación" onclick="enviart(this.value)" value="<?php echo $id_centro ?>"><i class="material-icons">visibility</i></button>
                    <button data-target="modal_cuatro" class="btn-floating btn modal-trigger blue-grey darken-4 tooltipped" data-position="top" data-delay="50" data-tooltip="Servicios Auxiliares" onclick="enviarc(this.value)" value="<?php echo $id_centro ?>"><i class="material-icons">visibility</i></button>
                     <button data-target="modal_cinco" class="btn-floating btn modal-trigger blue-grey darken-4 tooltipped" data-position="top" data-delay="50" data-tooltip="Cruces a Nivel" onclick="enviars(this.value)" value="<?php echo $id_centro ?>"><i class="material-icons">visibility</i></button>

                </div>
              </div>
            </div>
          </div>



      </div>

    </div>
   </div>
  </div>
</div>



 <!-- MODALES -->
<div id="modal_uno" class="modal modal-fixed-footer">
 <div class="modal-content">
   <h4>Información</h4>
   <div class="res_modal_uno">

   </div>
 </div>
 <div class="modal-footer">
   <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
 </div>
</div>
<!-- ************ -->
<div id="modal_dos" class="modal modal-fixed-footer">
 <div class="modal-content">
   <h4>Información</h4>
   <div class="res_modal_dos">

   </div>
 </div>
 <div class="modal-footer">
   <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
 </div>
</div>
<!-- ************ -->
<div id="modal_tres" class="modal modal-fixed-footer">
 <div class="modal-content">
   <h4>Información</h4>
   <div class="res_modal_tres">

   </div>
 </div>
 <div class="modal-footer">
   <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
 </div>
</div>
<!-- ************ -->
<div id="modal_cuatro" class="modal modal-fixed-footer">
 <div class="modal-content">
   <h4>Información</h4>
   <div class="res_modal_cuatro">

   </div>
 </div>
 <div class="modal-footer">
   <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
 </div>
</div>

<!-- ************ -->
<div id="modal_cinco" class="modal modal-fixed-footer">
 <div class="modal-content">
   <h4>Información</h4>
   <div class="res_modal_cinco">

   </div>
 </div>
 <div class="modal-footer">
   <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
 </div>
</div>


<?php include '../extend/scripts.php'; ?>
<script src="../js/modal.js"></script>

</body>
</html>
