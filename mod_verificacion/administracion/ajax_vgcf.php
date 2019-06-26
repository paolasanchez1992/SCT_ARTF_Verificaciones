<?php
include '../conexion/conexion.php';
$empresa = htmlentities($_POST['empresa'])

 ?>


  <div class="input-field">
   <i class="material-icons prefix">perm_contact_calendar</i>
 <select name="li" id="li" class="grey lighten-4" required>
  <option value="" disabled selected>SELECCIONA VGCF</option>
  <?php $sel_muni = $con->prepare("SELECT * FROM vgcf WHERE id_empresa = ?");
        $sel_muni->bind_param('i',$empresa);
        $sel_muni->execute();
        $res_muni = $sel_muni->get_result();
        while ($f_muni = $res_muni->fetch_assoc()) { ?>
  <option value="<?php echo $f_muni['id'] ?>"><?php echo $f_muni['vgcf'] ?></option>
<?php }
$sel_muni->close();
 ?>
</select>

</div>

<script src="../js/linea.js"></script>
<script>
$('select').material_select();

</script>
