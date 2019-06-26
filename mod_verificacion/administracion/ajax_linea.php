<?php
include '../conexion/conexion.php';
$linea = htmlentities($_POST['li']);
//echo $linea;
 ?>


  <div class="input-field">
   <i class="material-icons prefix">perm_contact_calendar</i>
 <select name="edo" id="edo" class="grey lighten-4" required>
  <option value="" disabled selected>ENTIDAD FEDERATIVA</option>
  <?php $sel_l = $con->prepare("SELECT * FROM vgcf_edo WHERE id_vgcf = ? ");
        $sel_l->bind_param('i',$linea);
        $sel_l->execute();
        $res_l = $sel_l->get_result();
        while ($f_l = $res_l->fetch_assoc()) { ?>
  <option value="<?php echo $f_l['id'] ?>"><?php echo $f_l['nombre'] ?></option>
<?php }
$sel_l->close();
 ?>
</select>

</div>

<script src="../js/edo.js"></script>
<script>
$('select').material_select();

</script>
