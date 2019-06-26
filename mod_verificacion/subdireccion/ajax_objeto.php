<?php
include '../conexion/conexion.php';
$area = htmlentities($_POST['area'])

 ?>


  <div class="input-field">
   <i class="material-icons prefix">list</i>
 <select name="objeto" id="objeto" class="grey lighten-4" required>
  <option value="" disabled selected>SELECCIONA EL OBJETO</option>
  <?php $sel_objeto = $con->prepare("SELECT * FROM objetos WHERE idarea = ?");
        $sel_objeto->bind_param('i',$area);
        $sel_objeto->execute();
        $res_objeto = $sel_objeto->get_result();
        while ($f_objeto = $res_objeto->fetch_assoc()) { ?>
  <option value="<?php echo $f_objeto['id'] ?>"><?php echo $f_objeto['nombre'] ?></option>
<?php }
$sel_objeto->close();
 ?>
</select>

</div>

<script src="../js/alcance.js"></script>
<script>
$('select').material_select();

</script>
