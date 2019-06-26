<?php
include '../conexion/conexion.php';
$objeto = htmlentities($_POST['objeto'])

 ?>


  <div class="input-field">
   <i class="material-icons prefix">list</i>
 <select name="alcance" id="alcance" class="grey lighten-4" required>
  <option value="" disabled selected>SELECCIONA EL ALCANCE</option>
  <?php $sel_alcance = $con->prepare("SELECT * FROM alcance WHERE idobjeto = ?");
        $sel_alcance->bind_param('i',$objeto);
        $sel_alcance->execute();
        $res_alcance = $sel_alcance->get_result();
        while ($f_alcance = $res_alcance->fetch_assoc()) { ?>
  <option value="<?php echo $f_alcance['id'] ?>"><?php echo $f_alcance['nombre'] ?></option>
<?php }
$sel_alcance->close();
 ?>
</select>

</div>

<script src="../js/fundamento.js"></script>
<script>
$('select').material_select();

</script>
