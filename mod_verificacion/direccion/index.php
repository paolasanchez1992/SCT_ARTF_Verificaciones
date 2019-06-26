<?php
include '../extend/header.php';
//include '../conexion/tiempo.php';
 ?>



<div class="row">
 <div class="col s12">
  <div class="card">
    <div class="card-content">
     <span class="card-title"></span>
      <form  action="index.php" method="post">
        <div class="row">
          <div class="col s12 m6">
             <div class="input-field">
                <i class="material-icons prefix">blur_on</i>
                  <select name="estado" class="validate" required>
                    <option value="" disabled selected>Selecciona Estado</option>
                        <?php
                              if ($_SESSION['nivel'] == 'ADMIN') {
                                       $sel_edo = $con->query("SELECT * FROM estados");
                              }elseif($_SESSION['nivel'] == 'DIRECTOR') {
                                      $sel_edo = $con->query("SELECT * FROM estados");
                               }elseif(($_SESSION['nivel'] == 'DIRECTORN') || ($_SESSION['nivel'] == 'SUBDIRECTORN')) {
                                       $sel_edo = $con->query("SELECT * FROM estados WHERE zona='N'");
                                }
                                elseif(($_SESSION['nivel'] == 'DIRECTORC') || ($_SESSION['nivel'] == 'SUBDIRECTORC')) {
                                        $sel_edo = $con->query("SELECT * FROM estados WHERE zona='C'");
                                 }elseif(($_SESSION['nivel'] == 'DIRECTORS') || ($_SESSION['nivel'] == 'SUBDIRECTORS')) {
                                         $sel_edo = $con->query("SELECT * FROM estados WHERE zona='S'");
                                  }


                               while ($f_edo = $sel_edo->fetch_assoc()) { ?>
                                <option value="<?php echo  $f_edo['idestado'] ?>"><?php echo $f_edo['estado'] ?></option>
                        <?php } ?>
                  </select>
              </div>
          </div>
         </div>
          <div class="row">
            <div class="col s12 m6">
              <button type="submit" class="btn green"><i class="material-icons left">send</i>Consultar</button>
            </div>
          </div>
       </form>
      </div>

    </div>
   </div>
  </div>


<!--MOSTRAR USUARIOS -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $estado = $con->real_escape_string(htmlentities($_POST['estado']));

 $sel = $con->query("SELECT * FROM centros_sct WHERE id_estado='$estado' ");
 $row = mysqli_num_rows($sel);
?>
<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <span class="card-title center  ">Programa Integral de  Supervisión y Verificación al Servicio Público de Transporte Ferroviario - PIV 2019</span>
        <table class="centered responsive-table highlight">
          <thead>
            <tr class="cabecera">
            <th>CENTRO</th>
            <th>DIRECTOR DE CENTRO</th>
            <th>JEFE DE DEPARTAMENTO</th>
            <th>VERIFICADOR</th>
            <th>OPCIONES</th>


          </tr>
          </thead>
          <?php while ($f = $sel->fetch_assoc()) { ?>
            <tr>
              <td><?php echo $f['valor_centro'] ?></td>
              <td><?php echo $f['titular'] ?></td>
              <td><?php echo $f['encargado'] ?></td>
              <td><?php echo $f['verificador1']."<br>".$f['verificador2'] ?></td>
              <td>
               <a href="anexo_uno.php?id_sct=<?php echo $f['id_estado'] ?>" class="btn-floating  waves-effect waves-light teal darken-4 tooltipped" target="_blank" data-position="top" data-delay="50" data-tooltip="ANEXO 1 JURISDICCIÓN"><i class="material-icons">gavel</i></a>
               <a href="anexo_dos.php?id_sct=<?php echo $f['id_estado'] ?>" class="btn-floating  waves-effect waves-light teal darken-4 tooltipped" target="_blank" data-position="top" data-delay="50" data-tooltip="ANEXO 2 PROGRAMA"><i class="material-icons">insert_invitation</i></a>
               <a href="anexo_cinco.php?id_sct=<?php echo $f['id_centro'] ?>" class="btn-floating  waves-effect waves-light teal darken-4 tooltipped" data-position="top" data-delay="50" data-tooltip="ANEXO 5 CRUCES A NIVEL"><i class="material-icons">shuffle</i></a>
              </td>

            </tr>

          <?php }?>
        </table>
      </div>
    </div>
  </div>
</div>

<?php }?>

<?php include '../extend/scripts.php'; ?>

</body>
</html>
