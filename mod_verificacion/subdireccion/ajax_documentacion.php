<?php
include '../conexion/conexion.php';
$funda = htmlentities($_POST['funda'])

 ?>


  <div class="input-field">
   <i class="material-icons prefix">list</i>
 <select name="doc" id="doc" class="grey lighten-4" required>
  <option value="" disabled selected>SELECCIONA LA DOCUMENTACIÓN</option>
  <?php $sel_doc = $con->prepare("SELECT * FROM documentacion WHERE idfun = ?");
        $sel_doc->bind_param('i',$funda);
        $sel_doc->execute();
        $res_doc = $sel_doc->get_result();
        while ($f_doc = $res_doc->fetch_assoc()) { ?>
  <option value="<?php echo $f_doc['id'] ?>"><?php echo $f_doc['nombre'] ?></option>
<?php }
$sel_doc->close();
 ?>
</select>

</div>

<!--<script src="../js/documentacion.js"></script>-->
<script>
$('select').material_select();

</script>
