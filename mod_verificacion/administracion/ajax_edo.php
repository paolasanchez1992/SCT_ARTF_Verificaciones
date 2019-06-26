<?php
include '../conexion/conexion.php';
$linea = htmlentities($_POST['edo']);
//echo $linea;
 ?>


  <div class="input-field">
   <i class="material-icons prefix">perm_contact_calendar</i>
 <select name="lin" id="lin" class="grey lighten-4" required>
  <option value="" disabled selected>LÍNEA</option>
  <?php $sel_l = $con->prepare("SELECT * FROM lineas WHERE id_estado = ? ");
        $sel_l->bind_param('i',$linea);
        $sel_l->execute();
        $res_l = $sel_l->get_result();
        while ($f_l = $res_l->fetch_assoc()) { ?>
  <option value="<?php echo $f_l['linea'] ?>"><?php echo $f_l['linea'] ?></option>
<?php }
$sel_l->close();
 ?>
</select>

</div>


<script>
$('select').material_select();

</script>
