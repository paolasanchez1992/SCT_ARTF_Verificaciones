<?php
include '../conexion/conexion.php';
$emp = htmlentities($_POST['emp'])

 ?>


  <div class="input-field">
   <i class="material-icons prefix">list</i>
 <select name="vgcf" id="vgcf" class="blue-grey lighten-5" required>
  <option value="" disabled selected>SELECCIONA LA VGCF</option>
  <?php $sel_vgcf = $con->prepare("SELECT * FROM vgcf_piv WHERE id_emp = ? ");
        $sel_vgcf->bind_param('i',$emp);
        $sel_vgcf->execute();
        $res_vgcf = $sel_vgcf->get_result();
        while ($f_vgcf = $res_vgcf->fetch_assoc()) { ?>
  <option value="<?php echo $f_vgcf['id'] ?>"><?php echo $f_vgcf['vgcf'] ?></option>
<?php }
$sel_vgcf->close();
 ?>
</select>

</div>

<script src="../js/linea_piv.js"></script>
<script>
$('select').material_select();

</script>
