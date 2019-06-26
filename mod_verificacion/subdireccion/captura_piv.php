<?php
include '../extend/header.php';
include '../funciones/centros.php';
$zona = $_SESSION['zona'];



?>

<div class="row">
 <div class="col s12">
  <div class="card">
    <div class="card-content">
     <span class="card-title">Captura PIV (Programa Integral de Verificación)</span>

        <form class="form" action="in_piv.php" method="post">

             <input type="hidden" name="tipo_ver" value="1">

           <div class="row">

             <div class="col s12 m3">
              <div class="input-field">
                  <i class="material-icons prefix">event</i>
                   <select name="mes" id="mes" class="blue-grey lighten-5" required>
                        <option value="" disabled selected>SELECCIONA EL MES DE VERIFICACIÓN</option>
                         <?php
                           $sel_mes = $con->query("SELECT * FROM mes");
                             while ($f_mes = $sel_mes->fetch_assoc()) {
                          ?>
                         <option value="<?php echo  $f_mes['id'] ?>"><?php echo $f_mes['nombre'] ?></option>
                          <?php } ?>
                   </select>
                 </div>
               </div>

               <div class="col s12 m3">
                <div class="input-field">
                    <i class="material-icons prefix">list</i>
                     <select name="area" id="area" class="blue-grey lighten-5" required>
                          <option value="" disabled selected>SELECCIONA EL ÁREA DE VERIFIACIÓN</option>
                           <?php
                             $sel_area = $con->query("SELECT * FROM area_ver");
                               while ($f_area = $sel_area->fetch_assoc()) {
                            ?>
                           <option value="<?php echo  $f_area['id'] ?>"><?php echo $f_area['nombre'] ?></option>
                            <?php } ?>
                     </select>
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
                            <option value="" disabled selected>SELECCIONA EL ESTADO</option>
                             <?php

                               $sel_edo = $con->query("SELECT * FROM estados WHERE zona = '$zona' ");
                                 while ($f_edo = $sel_edo->fetch_assoc()) {
                              ?>
                             <option value="<?php echo  $f_edo['idestado'] ?>"><?php echo $f_edo['estado'] ?></option>
                              <?php } ?>
                       </select>
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
                      <input type="text" name="tramo" id="tramo" class="blue-grey lighten-5 center validate" required>
                      <label for="tramo">TRAMO</label>
                      </div>
                  </div>

                  <div class="col s12 m2">
                    <div class="input-field">
                      <i class="material-icons prefix">train</i>
                      <input type="text" name="kmi" id="kmi" class="blue-grey lighten-5 center validate" required>
                      <label for="kmi">KM INICIAL</label>
                      </div>
                  </div>

                  <div class="col s12 m2">
                    <div class="input-field">
                      <i class="material-icons prefix">train</i>
                      <input type="text" name="kmF" id="kmF" class="blue-grey lighten-5 center validate" required>
                      <label for="kmF">KM FINAL</label>
                      </div>
                  </div>

                  <div class="col s12 m2">
                   <div class="input-field">
                       <i class="material-icons prefix">list</i>
                        <select name="dias" id="dias" class="blue-grey lighten-5" required>
                             <option value="" disabled selected>DÍAS DE VERIFICACIÓN</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">



                  <div class="col s12 m12">
                    <div class="input-field">
                      <i class="material-icons prefix">mode_comment</i>
                      <textarea id="obs" name="obs" class="materialize-textarea blue-grey lighten-5" required></textarea>
                      <label for="obs">OBSERVACIONES</label>
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
  </div>
</div>

<?php include '../extend/scripts.php'; ?>
<script src="../js/objeto.js"></script>
<script src="../js/empresa_piv.js"></script>

</body>
</html>
