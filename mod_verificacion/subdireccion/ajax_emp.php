<?php
include '../conexion/conexion.php';
$estado = htmlentities($_POST['estado'])

 ?>


  <div class="input-field">
   <i class="material-icons prefix">list</i>
 <select name="emp" id="emp" class="blue-grey lighten-5" required>
  <option value="" disabled selected>SELECCIONA LA EMPRESA</option>
  <?php $sel_emp = $con->prepare("SELECT * FROM empresas_piv WHERE id_estado = ? ");
        $sel_emp->bind_param('i',$estado);
        $sel_emp->execute();
        $res_emp = $sel_emp->get_result();
        while ($f_emp = $res_emp->fetch_assoc()) { ?>
  <option value="<?php echo $f_emp['id'] ?>"><?php echo $f_emp['empresa'] ?></option>
<?php }
$sel_emp->close();
 ?>
</select>

</div>

<script src="../js/vgcf_piv.js"></script>
<script>
$('select').material_select();

</script>
