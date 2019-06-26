<?php
include '../extend/header.php';
include '../funciones/piv.php';
//include '../conexion/tiempo.php';
error_reporting(E_ALL ^ E_NOTICE);
//id_verificacion
$id_ver = $con->real_escape_string(htmlentities($_GET['id']));

$sel = $con->query("SELECT * FROM detalle_cal WHERE id_ver = '$id_ver' ");
 $row = mysqli_num_rows($sel);
 while ($f = $sel->fetch_assoc()) {
   $estatus = $f['estatus'];
 }

 if ($estatus == 'T') {
//   header('location:../extend/alerta.php?msj=Datos Capturados&c=ver&p=in&t=error');
   echo "<script> window.location='../extend/alerta.php?msj=Datos Capturados&c=ver&p=ver&t=error' </script>";
 }

 else {

//SELECCIONAMOS LOS DATOS DE LA VERIFICACION
$sel_ver = $con->prepare("SELECT * FROM verificaciones_pro WHERE id = ? ");
$sel_ver->bind_param('i', $id_ver);
$sel_ver->execute();
$res_ver = $sel_ver->get_result();
while ($f_ver = $res_ver->fetch_assoc()) {
  $D = $f_ver['km_ini'];
  $E = $f_ver['km_fin'];
  $id_centro = $f_ver['id_centro'];

  $empresa = $f_ver['empresa'];
  $vgcf = $f_ver['vgcf'];
  $linea = $f_ver['linea'];
  $area = $f_ver['area_ver'];
  $mes = $f_ver['mes_ver'];

  $empresa_nom = empresa($empresa);
  $vgcf_nom = vgcf($vgcf);
  $linea_nom = linea($linea);
  $area_ver = area2($area);
  $mes_nom = mes($mes);

  $obje = $f_ver['objeto_ver'];
  $alca = $f_ver['alcance_ver'];
  $fund = $f_ver['fun_ver'];
  $docv = $f_ver['doc_ver'];

  $obje_ver = objeto($obje);
  $alca_ver = alcance($alca);
  $fund_ver = fundamento($fund);
  $docv_ver = documenta($docv);

}

?>

<div class="row">
 <div class="col s12">
  <div class="card">
    <div class="card-content">
     <span class="card-title">DE LA VÍA</span>

        <form class="form" action="in_cal.php" method="post">
          <input type="hidden" name="id_ver" value="<?php echo $id_ver ?>">
          <input type="hidden" name="id_centro" value="<?php echo $id_centro ?>">
          <input type="hidden" name="linea" value="<?php echo $linea ?>">
          <input type="hidden" name="vgcf" value="<?php echo $vgcf ?>">

          <div class="row">

            <div class="col s12 m12">
              <div class="input-field">
                <i class="material-icons prefix">place</i>
                <input type="text" name="sitio" id="sitio" class="validate center" required>
                <label for="sitio">LUGAR DE ENCUENTRO</label>
                </div>
            </div>

            <div class="input-field col s12 m4">
              <i class="material-icons prefix">insert_invitation</i>
              <input type="text" name="fecha1" id="fecha1" class="datepicker center" required>
              <label for="fecha1">INICIO DE LA VERIFICACIÓN</label>
            </div>

            <div class="input-field col s12 m4">
              <i class="material-icons prefix">insert_invitation</i>
              <input type="text" name="fecha2" id="fecha2" class="datepicker center" required>
              <label for="fecha2">TÉRMINO DE LA VERIFICACIÓN</label>
            </div>

            <div class="input-field col s12 m4">
              <i class="material-icons prefix">timer</i>
              <input type="text" name="hora" id="hora" class="center" maxlength="5" placeholder="hh:mm" onKeyPress="return acceptNum(event)" required>
              <label for="hora">HORA INICIO DE VERIFICACIÓN</label>
            </div>

            <div class="input-field col s12 m4">
              <i class="material-icons prefix">train</i>
              <input type="text" name="empresa" id="empresa" class="blue-grey lighten-5 center" value="<?php echo $empresa_nom ?>" required readonly>
              <label for="empresa">EMPRESA</label>
            </div>

            <div class="input-field col s12 m4">
              <i class="material-icons prefix">train</i>
              <input type="text" name="area" id="area" class="blue-grey lighten-5 center" value="<?php echo $area_ver ?>" required readonly>
              <label for="area">ÁREA DE VERIFICACIÓN</label>
            </div>


             <div class="col s12 m12">
               <div class="input-field">
                 <i class="material-icons prefix">train</i>
                 <textarea id="objeto" name="objeto" class="materialize-textarea blue-grey lighten-5" readonly><?php echo $obje_ver ?></textarea>

                 <label for="objeto">CON OBJETO DE:</label>
                 </div>
             </div>

             <div class="col s12 m12">
               <div class="input-field">
                 <i class="material-icons prefix">train</i>
                 <textarea id="alcance" name="alcance" class="materialize-textarea blue-grey lighten-5" readonly><?php echo $alca_ver ?></textarea>
                 <label for="alcance">ALCANCE:</label>
                 </div>
             </div>
             <div class="col s12 m12">
               <div class="input-field">
                 <i class="material-icons prefix">train</i>
                 <textarea id="fundamento" name="fundamento" class="materialize-textarea blue-grey lighten-5" readonly><?php echo $fund_ver ?></textarea>
                 <label for="fundamento">FUNDAMENTO:</label>
                 </div>
             </div>
             <div class="col s12 m12">
               <div class="input-field">
                 <i class="material-icons prefix">train</i>
                 <textarea id="doc" name="doc" class="materialize-textarea blue-grey lighten-5" readonly><?php echo $docv_ver ?></textarea>
                 <label for="doc">DOCUMENTACIÓN:</label>
                 </div>
             </div>



             <div class="col s12 m4">
               <div class="input-field">
                 <i class="material-icons prefix">train</i>
                 <input type="text" name="vl" id="vl" class="blue-grey lighten-5 center" value="<?php echo $linea_nom ?>"  readonly>
                 <label for="vl">VÍA / LÍNEA</label>
                 </div>
             </div>

             <div class="col s12 m4">
               <div class="input-field">
                 <i class="material-icons prefix">train</i>
                 <input type="text" name="kmi" id="kmi" class="blue-grey lighten-5 center" value="<?php echo $D ?>"  readonly>
                 <label for="kmi">KM INICIAL</label>
                 </div>
             </div>

             <div class="col s12 m4">
               <div class="input-field">
                 <i class="material-icons prefix">train</i>
                 <input type="text" name="kmF" id="kmF" class="blue-grey lighten-5 center" value="<?php echo $E ?>"  readonly>
                 <label for="kmF">KM FINAL</label>
                 </div>
             </div>


            </div>

               <div class="row">




                 <div class="row">
                  <button type="submit"  class="btn green"><i class="material-icons left">send</i>AGENDAR</button>

                 </div>

          </form>
        </div>

    </div>
   </div>
  </div>
</div>


<?php
 }
include '../extend/scripts.php'; ?>
<script src="../js/valida_campos.js"></script>

</body>
</html>
