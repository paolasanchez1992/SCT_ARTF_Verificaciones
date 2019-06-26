<?php
include '../conexion/conexion.php';
$vgcf = htmlentities($_POST['vgcf']);
//echo $linea;
 ?>

  <div class="input-field">
   <i class="material-icons prefix">list</i>
 <select name="linea" id="linea" class="blue-grey lighten-5" required>
  <option value="" disabled selected>SELECCIONA LA LÍNEA</option>
  <?php $sel_l = $con->prepare("SELECT * FROM linea_piv WHERE id_vgcf = ? ");
        $sel_l->bind_param('i',$vgcf);
        $sel_l->execute();
        $res_l = $sel_l->get_result();
        while ($f_l = $res_l->fetch_assoc()) { ?>
  <option value="<?php echo $f_l['id'] ?>"><?php echo $f_l['linea'] ?></option>
<?php }
$sel_l->close();
 ?>
</select>

</div>


<script>
$('select').material_select();

</script>
