<?php
include '../conexion/conexion.php';
$alcance = htmlentities($_POST['alcance'])

 ?>


  <div class="input-field">
   <i class="material-icons prefix">list</i>
 <select name="funda" id="funda" class="grey lighten-4" required>
  <option value="" disabled selected>SELECCIONA EL FUNDAMENTO</option>
  <?php $sel_fundamento = $con->prepare("SELECT * FROM fundamentos WHERE idalcance = ?");
        $sel_fundamento->bind_param('i',$alcance);
        $sel_fundamento->execute();
        $res_fundamento = $sel_fundamento->get_result();
        while ($f_fundamento = $res_fundamento->fetch_assoc()) { ?>
  <option value="<?php echo $f_fundamento['id'] ?>"><?php echo $f_fundamento['nombre'] ?></option>
<?php }
$sel_fundamento->close();
 ?>
</select>

</div>

<script src="../js/documentacion.js"></script>
<script>
$('select').material_select();

</script>
