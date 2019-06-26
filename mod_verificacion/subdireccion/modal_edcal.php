<?php
include '../conexion/conexion.php';

//include '../extend/permiso.php';

  $id_ver = $con->real_escape_string(htmlentities($_GET['id']));

  $sel = $con->prepare("SELECT * FROM detalle_cal WHERE id_ver = ?");
  $sel->bind_param('i', $id_ver);
  $sel->execute();
  $res = $sel->get_result();
  if ($f = $res->fetch_assoc()) {

  }

 ?>

 <div class="row">
  <div class="col s12">
   <div class="card">
     <div class="card-content">
      <span class="card-title">DE LA VÍA</span>

         <form class="form" action="up_cal.php" method="post">

           <input type="hidden" name="id_ver" value="<?php echo $id_ver ?>">
           <input type="hidden" name="ver" value="<?php echo $f['verificador'] ?>">

            <div class="row">

             <div class="col s12 m12">
               <div class="input-field">
                 <i class="material-icons prefix">place</i>
                 <input type="text" name="sitio" id="sitio" class="validate center" value="<?php echo $f['lugar'] ?>" required>
                 <label for="sitio">LUGAR DE REUNIÓN</label>
                 </div>
             </div>
             </div>


             <div class="row">
             <div class="input-field col s12 m6">
               <i class="material-icons prefix">insert_invitation</i>
               <input type="text" name="fecha" id="fecha" class="datepicker center" value="<?php echo $f['fecha'] ?>" required>
               <label for="fecha">FECHA INICIAL DE LA VERIFICACIÓN</label>
               <div class="res_fecha"></div>
              </div>

             <div class="input-field col s12 m6">
               <i class="material-icons prefix">insert_invitation</i>
               <input type="text" name="fechaf" id="fechaf" class="datepicker center" value="<?php echo $f['fecha_f'] ?>" required>
               <label for="fechaf">FECHA FINAL DE LA VERIFICACIÓN</label>
               <div class="res_fecha1"></div>
             </div>
             </div>

             <div class="row">

              <div class="input-field col s12 m4">
               <i class="material-icons prefix">timer</i>
               <input type="text" name="hora" id="hora" class="center" maxlength="5" value="<?php echo $f['hora'] ?>" onKeyPress="return acceptNum(event)" required>
               <label for="hora">HORA INICIO DE VERIFICACIÓN</label>
             </div>
             </div>

             <div class="row">
                <button type="submit" class="btn green"><i class="material-icons left">send</i>MODIFICAR</button>
             </div>
        </form>
             </div>




     </div>
    </div>
   </div>


 <?php include '../extend/scripts.php'; ?>
 <script src="../js/valida_fecha.js"></script>
