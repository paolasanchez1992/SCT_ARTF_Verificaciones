<?php
include '../extend/header.php';
//id_verificacion
$id_ver = $con->real_escape_string(htmlentities($_GET['id']));

//SELECCIONAMOS LOS DATOS DE LA VERIFICACION
$sel_ver = $con->prepare("SELECT * FROM verificaciones WHERE id_ver = ? ");
$sel_ver->bind_param('s', $id_ver);
$sel_ver->execute();
$res_ver = $sel_ver->get_result();
while ($f_ver = $res_ver->fetch_assoc()) {
  $A = $f_ver['tipo_v'];
  $B = $f_ver['clase'];
  $C = $f_ver['calibre_r'];
  $D = $f_ver['fijacion'];
  $E = $f_ver['tipo_d'];
  $F = $f_ver['laminado'];
  $G = $f_ver['oficio_n'];
  $H = $f_ver['oficio_c'];
  $I = $f_ver['actai_fecha'];
  $J = $f_ver['actai_numero'];
}

//SELECCIONAMOS LOS DATOS DE LA IRREGULARIDAD
$sel_ir = $con->prepare("SELECT * FROM irregularidades WHERE id_ver = ? ");
$sel_ir->bind_param('s', $id_ver);
$sel_ir->execute();
$res_ir = $sel_ir->get_result();
while ($f_ir = $res_ir->fetch_assoc()) {
  $AA = $f_ir['placa_kini'];
  $BB = $f_ir['placa_kfin'];
  $CC = $f_ir['pl'];
  $DD = $f_ir['descripcion1'];
  $EE = $f_ir['descripcion2'];
  $FF = $f_ir['descripcion3'];
  $GG = $f_ir['plazo'];
  $HH = $f_ir['fecha_c'];
  $II = $f_ir['descripcion4'];
}



?>

<div class="row">
 <div class="col s12">
  <div class="card">
    <div class="card-content">
     <span class="card-title">DE LA VÍA</span>

        <form class="form" action="up_verificacion.php" method="post">
          <input type="hidden" name="id_ver" value="<?php echo $id_ver ?>">

          <div class="row">
             <div class="col s12 m4">
               <div class="input-field">
                  <i class="material-icons prefix">train</i>
                  <select name="tipo_v" required>
                  <option value="<?php echo $A ?>"><?php echo $A ?></option>
                  <option value="CLASICA" >CLASICA</option>
                  <option value="ELASTICA" >ELASTICA</option>
                  <option value="CLASICA/ELASTICA" >MIXTA</option>
                  </select>
              </div>
             </div>

             <div class="col s12 m4">
               <div class="input-field">
                 <i class="material-icons prefix">train</i>
                 <input type="text" name="clase" id="clase" class="validate blue-grey lighten-5 center" value="<?php echo $B ?>" required  onblur="may(this.value, this.id)" maxlength="2">
                 <label for="clase">CLASE</label>
                 </div>
             </div>

              <div class="col s12 m4">
                <div class="input-field">
                  <i class="material-icons prefix">train</i>
                  <input type="text" name="calibre" id="calibre" class="validate blue-grey lighten-5 center" value="<?php echo $C ?>" required onblur="may(this.value, this.id)">
                  <label for="calibre">CALIBRE</label>
                  </div>
              </div>
            </div>


            <div class="row">

               <div class="col s12 m4">
                 <div class="input-field">
                   <i class="material-icons prefix">train</i>
                   <input type="text" name="fijacion" id="fijacion" class="validate blue-grey lighten-5 center" value="<?php echo $D ?>" required  onblur="may(this.value, this.id)">
                   <label for="fijacion">FIJACIÓN</label>
                   </div>
               </div>

               <div class="col s12 m4">
                 <div class="input-field">
                    <i class="material-icons prefix">train</i>
                    <select name="durmiente" required>
                    <option value="<?php echo $E ?>"><?php echo $E ?></option>
                    <option value="MADERA" >MADERA</option>
                    <option value="CONCRETO" >CONCRETO</option>
                    <option value="MADERA/CONCRETO" >MADERA/CONCRETO</option>
                    </select>
                </div>
               </div>

                <div class="col s12 m4">
                  <div class="input-field">
                    <i class="material-icons prefix">train</i>
                    <input type="text" name="laminado" id="laminado" class="validate blue-grey lighten-5 center" value="<?php echo $F ?>" required onblur="may(this.value, this.id)">
                    <label for="laminado">LAMIDADO</label>
                    </div>
                </div>
              </div>

              <h4>VI- VERIFICACIÓN INICIAL</h4>
               <div class="row">
                   <div class="row">
                     <div class="input-field col s12 m4">
                       <i class="material-icons prefix">train</i>
                       <input name="oficio" id="oficio" type="text" value="<?php echo $G ?>" class="validate" onblur="may(this.value, this.id)" required>
                       <label for="oficio">OFICIO DE NOTIFICACIÓN</label>
                     </div>
                     <div class="input-field col s12 m4">
                       <i class="material-icons prefix">train</i>
                       <input name="oficioc" id="oficioc" type="text" value="<?php echo $H ?>" class="validate" onblur="may(this.value, this.id)" required>
                       <label for="oficioc">OFICIO DE COMISIÓN</label>
                     </div>
                     <div class="input-field col s12 m4">
                       <i class="material-icons prefix">train</i>
                       <input type="text" name="fecha" id="fecha" class="datepicker center" value="<?php echo $I ?>" onblur="may(this.value, this.id)" maxlength="10" required>
                       <label for="fecha">ACTA INICIAL FECHA</label>
                     </div>
                     <div class="input-field col s12 m4">
                       <i class="material-icons prefix">train</i>
                       <input name="actai" id="actai" type="text" class="validate" value="<?php echo $J ?>" onblur="may(this.value, this.id)" required>
                       <label for="actai">ACTA INICIAL NÚMERO</label>
                     </div>
                </div>

                <div class="row">
                  <div class="col s12 m4">
                    <div class="input-field">
                       <i class="material-icons prefix">train</i>
                       <select name="est" id="est" required>
                       <option value="" disabled selected>IRREGULARIDAD</option>
                       <option value="A" >SI</option>
                       <option value="B" >NO</option>
                       </select>
                   </div>
                  </div>
                </div>

        <!-- IRREGULARIDAD -->
        <div class="row" id="cambio">
        <span class="card-title">IRREGULARIDADES / MEDIDAS DE SEGURIDAD (MS)</span>
              <div class="col s12 m4">
                <div class="input-field">
                  <i class="material-icons prefix">feedback</i>
                  <input type="text" name="placa" id="placa" class="blue-grey lighten-5 center"   title="PLACA KILOMÉTRICA INICIAL" onblur="may(this.value, this.id)" required>
                  <label for="placa">PLACA KILOMÉTRICA INICIAL</label>
                </div>
              </div>
              <div class="col s12 m4">
                <div class="input-field">
                  <i class="material-icons prefix">feedback</i>
                  <input type="text" name="placaf" id="placaf" class="blue-grey lighten-5 center"   title="PLACA KILOMÉTRICA FINAL" onblur="may(this.value, this.id)" required>
                  <label for="placaf">PLACA KILOMÉTRICA FINAL</label>
                </div>
              </div>
              <div class="col s12 m4">
                <div class="input-field">
                  <i class="material-icons prefix">feedback</i>
                  <input type="text" name="pl" id="pl" class="blue-grey lighten-5 center"   title="TIPO DE MEDIDA EN RELACIÓN AL KM (PUNTUAL O LONGITUDINAL)" onblur="may(this.value, this.id)" required>
                  <label for="pl">MEDIDA EN RELACIÓN AL KM (PUNTUAL O LONGITUDINAL)</label>
                </div>
              </div>
              <div class="col s12 m12">
                <div class="input-field">
                  <i class="material-icons prefix">feedback</i>
                  <textarea id="des" name="des" class="materialize-textarea blue-grey lighten-5" title="DESCRIPCIÓN DE LA ANOMALÍA, DEFECTO, IRREGULARIDAD O AFECTACIÓN ENCONTRADA" onblur="may(this.value, this.id)" required></textarea>
                  <label for="des">DESCRIPCIÓN DE LA ANOMALÍA, DEFECTO, IRREGULARIDAD O AFECTACIÓN ENCONTRADA</label>
                </div>
              </div>
              <div class="col s12 m12">
                <div class="input-field">
                  <i class="material-icons prefix">feedback</i>
                  <textarea id="des2" name="des2" class="materialize-textarea blue-grey lighten-5" title="DESCRIPCIÓN DE RECOMENDACIÓN EMITIDA SIN QUE SEA CONSIDERADA MS" onblur="may(this.value, this.id)" required></textarea>
                  <label for="des2">DESCRIPCIÓN DE RECOMENDACIÓN EMITIDA SIN QUE SEA CONSIDERADA MS</label>
                </div>
              </div>
              <div class="col s12 m12">
                <div class="input-field">
                  <i class="material-icons prefix">feedback</i>
                  <textarea id="des3" name="des3" class="materialize-textarea blue-grey lighten-5" title="DESCRIPCIÓN MS DICTADA" onblur="may(this.value, this.id)" required></textarea>
                  <label for="des3">DESCRIPCIÓN MS DICTADA</label>
                </div>
              </div>
              <div class="col s12 m6">
                <div class="input-field">
                  <i class="material-icons prefix">feedback</i>
                  <input type="text" name="plazod" id="plazod" class="blue-grey lighten-5 center" title="PLAZO DICTADO PARA CUMPLIMIENTO  MS (DÍAS)" onblur="may(this.value, this.id)" maxlength="3" required>
                  <label for="plazod">PLAZO DICTADO PARA CUMPLIMIENTO  MS (DÍAS)</label>
                </div>
              </div>
              <div class="input-field col s12 m6">
                <i class="material-icons prefix">train</i>
                <input type="text" name="fechac" id="fechac" class="datepicker center" title="FECHA PARA CUMPLIMIENTO MS" onblur="may(this.value, this.id)" maxlength="10" required>
                <label for="fechac">FECHA PARA CUMPLIMIENTO MS</label>
              </div>
              <div class="col s12 m12">
                <div class="input-field">
                  <i class="material-icons prefix">feedback</i>
                  <textarea id="des4" name="des4" class="materialize-textarea blue-grey lighten-5" title="MS HOMOLOGADA EN RELACIÓN AL ARTÍCULO 59, CAPITULO XI DE LA LEY REGLAMENTARIA DEL SERVICIO FERROVIARIO" onblur="may(this.value, this.id)"></textarea>
                  <label for="des4">MS HOMOLOGADA EN RELACIÓN AL ARTÍCULO 59, CAPITULO XI DE LA LEY REGLAMENTARIA DEL SERVICIO FERROVIARIO </label>
                </div>
              </div>

        </div>
      <!-- FIN IRREGULARIDAD -->

      <div class="row">
        <button type="submit"  class="btn green"><i class="material-icons left">send</i>Guardar</button>
      </div>

      </form>
    </div>

    </div>
   </div>
  </div>
</div>

<?php include '../extend/scripts.php'; ?>
<script>



$('#est').change(function(){
    var valorCambiado=$(this).val();

    if(valorCambiado == 'A'){
      $('#cambio').css('display','block');

    }
    else if (valorCambiado == 'B') {
      $('#cambio').css('display','none');

      $("#placa").removeAttr("required");
      $("#placaf").removeAttr("required");
      $("#pl").removeAttr("required");
      $("#des").removeAttr("required");
      $("#des2").removeAttr("required");
      $("#des3").removeAttr("required");
      $("#plazod").removeAttr("required");
      $("#fechac").removeAttr("required");

      $('#placa').val('');
      $('#placaf').val('');
      $('#pl').val('');
      $('#des').val('');
      $('#des2').val('');
      $('#des3').val('');
      $('#plazod').val('');
      $('#fechac').val('');
      $('#des4').val('');

    }
  });

</script>

</body>
</html>
