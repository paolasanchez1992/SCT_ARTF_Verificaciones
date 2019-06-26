<?php
include '../extend/header.php';
include '../funciones/piv.php';
$zona = $_SESSION['zona'];


$id = $con->real_escape_string(htmlentities($_GET['id']));

//SELECCIONAMOS LOS DATOS DE LA VERIFICACION
$sel_ver = $con->prepare("SELECT * FROM verificaciones_pro WHERE id = ? ");
$sel_ver->bind_param('s', $id);
$sel_ver->execute();
$res_ver = $sel_ver->get_result();
while ($f_ver = $res_ver->fetch_assoc()) {
  $A = $f_ver['id'];
  $B = $f_ver['id_centro'];
  $C = $f_ver['numero_ver'];
  $D = $f_ver['tipo_ver'];
  $mes = $f_ver['mes_ver'];
  $area = $f_ver['area_ver'];
  $D4 = $f_ver['tramo'];
  $E5 = $f_ver['km_ini'];
  $F6 = $f_ver['km_fin'];
  $G7 = $f_ver['km_redf'];
  $H8 = $f_ver['dias_ver'];
  $I9 = $f_ver['observaciones'];
}

  $mes_nom = mes($mes);
  $area_nom = area($area);

?>


<div class="row">
   <div class="col s12">
     <div class="card">
   <form class="form" action="up_verificacion.php" method="post">
       <div class="card-content">
         <input type="hidden" name="id" value="<?php echo $id ?>">
         <div class="row">
           <!--mes de la verificación -->
           <div class="col s12 m3">
             <div class="input-field">
                 <i class="material-icons prefix">event</i>
                  <select name="mes" id="mes" class="blue-grey lighten-5" required>
                       <option value="<?php echo $mes; ?>"><?php echo $mes_nom; ?></option>
                        <?php
                          $sel_mes = $con->query("SELECT * FROM mes");
                            while ($f_mes = $sel_mes->fetch_assoc()) {
                         ?>
                        <option value="<?php echo  $f_mes['id'] ?>"><?php echo $f_mes['nombre'] ?></option>
                         <?php } ?>
                  </select>
                  <label for="mes">MES DE VERIFIACIÓN</label>
                </div>
              </div>
            <!-- area de verificacion -->
            <div class="col s12 m3">
               <div class="input-field">
                   <i class="material-icons prefix">list</i>
                    <select name="area" id="area" class="blue-grey lighten-5" required>
                         <option value="<?php echo $area; ?>"><?php echo $area_nom; ?></option>
                          <?php
                            $sel_area = $con->query("SELECT * FROM area_ver");
                              while ($f_area = $sel_area->fetch_assoc()) {
                           ?>
                          <option value="<?php echo  $f_area['id'] ?>"><?php echo $f_area['nombre'] ?></option>
                           <?php } ?>
                    </select>
                    <label for="area">ÁREA DE VERIFIACIÓN</label>
                  </div>
                </div>
         </div>

         <div class="row">
           <div class="col s12 m3">
            <div class="res_objeto"></div>
           </div>
           <div class="col s12 m3">
            <div class="res_alcance"></div>
           </div>

           <div class="col s12 m3">
            <div class="res_fundamento"></div>
           </div>

           <div class="col s12 m3">
            <div class="res_funda"></div>
           </div>
         </div>

         <div class="row">
           <div class="col s12 m3">
                  <div class="input-field">
                      <i class="material-icons prefix">list</i>
                       <select name="estado" id="estado" class="blue-grey lighten-5"  required>
                             <?php
                               $sel_edo = $con->query("SELECT * FROM estados WHERE idestado = '$B' ");
                                 while ($f_edo = $sel_edo->fetch_assoc()) {
                              ?>
                             <option value="<?php echo  $f_edo['idestado'] ?>"><?php echo $f_edo['estado'] ?></option>
                              <?php } ?>
                       </select>
                       <label for="estado">ESTADO</label>
                     </div>
                </div>

                <div class="col s12 m3">
                 <div class="res_emp"></div>
                </div>
                <div class="col s12 m3">
                 <div class="res_vgcf"></div>
                </div>
                <div class="col s12 m3">
                 <div class="res_linea"></div>
                </div>
           </div>

           <div class="row">
             <div class="col s12 m6">
                    <div class="input-field">
                      <i class="material-icons prefix">train</i>
                      <input type="text" name="tramo" id="tramo" class="blue-grey lighten-5 center validate" value="<?php echo $D4; ?>" required>
                      <label for="tramo">TRAMO</label>
                      </div>
                  </div>

                  <div class="col s12 m2">
                    <div class="input-field">
                      <i class="material-icons prefix">train</i>
                      <input type="text" name="kmi" id="kmi" class="blue-grey lighten-5 center validate" value="<?php echo $E5; ?>" required>
                      <label for="kmi">KM INICIAL</label>
                      </div>
                  </div>

                  <div class="col s12 m2">
                    <div class="input-field">
                      <i class="material-icons prefix">train</i>
                      <input type="text" name="kmF" id="kmF" class="blue-grey lighten-5 center validate" value="<?php echo $F6; ?>" required>
                      <label for="kmF">KM FINAL</label>
                      </div>
                  </div>

                  <div class="col s12 m2">
                   <div class="input-field">
                       <i class="material-icons prefix">list</i>
                        <select name="dias" id="dias" class="blue-grey lighten-5" required>
                              <option value="<?php echo $H8; ?>"><?php echo $H8; ?></option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                        </select>
                        <label for="dias">DÍAS DE VERIFIACIÓN</label>
                      </div>
                    </div>

           </div>

           <div class="row">
             <div class="col s12 m12">
                 <div class="input-field">
                   <i class="material-icons prefix">mode_comment</i>
                   <textarea id="obs" name="obs" class="materialize-textarea blue-grey lighten-5" required><?php echo $I9; ?></textarea>
                   <label for="obs">OBSERVACIONES</label>
                   </div>
               </div>
           </div>

       </div>

       <div class="card-action">
         <button type="submit" class="btn green"><i class="material-icons left">send</i>GUARDAR</button>
       </div>
   </form>
     </div>
   </div>
 </div>



<?php include '../extend/scripts.php'; ?>
<script src="../js/objeto.js"></script>
<script src="../js/empresa_piv.js"></script>


</body>
</html>
