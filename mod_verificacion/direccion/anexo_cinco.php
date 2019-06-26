<?php
include '../extend/header.php';
include '../conexion/tiempo.php';

$id_sct = $con->real_escape_string(htmlentities($_GET['id_sct']));


$sel_img = $con->query("SELECT * FROM mapas WHERE id_centro = '$id_sct'");
    while ($f_img = $sel_img->fetch_assoc()) {
      $img = $f_img['img'];
      $nombre_e = $f_img['nombre'];
      $id_centro = $f_img['id_centro'];
    }

?>



<!--BUSCAR USUARIOS -->



<div class="row">
 <div class="col s12">
  <div class="card">
    <div class="card-content">


     <span class="card-title">ANEXO 5 CRUCES A NIVEL</span>

     <div class="row">
       <div class="col s12">
         <nav class="grey lighten-4">
           <div class="nav-wrapper">
             <div class="input-field">
               <input type="search" id="buscar" autocomplete="off">
                <label for="buscar"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
             </div>
           </div>
         </nav>
       </div>
     </div>

     <div class="row">


        <div class="col s12 m12">
          <div class="card">
            <div class="card-image">

            </div>
            <div class="card-content">
              <span class="card-title center">CRUCES A NIVEL  <?php echo strtoupper($nombre_e) ?></span>

              <!--MOSTRAR CVF -->
              <?php
                if ($_SESSION['nivel'] == 'ADMIN') {
                  $sel_cal = $con->prepare("SELECT * FROM cruces_gen");
                }else {
                  $sel_cal = $con->prepare("SELECT * FROM cruces_gen WHERE id_centro = ? ");
                  $sel_cal->bind_param('s', $id_sct);
                }
                $sel_cal->execute();
                $res_cal = $sel_cal->get_result();
                $row = mysqli_num_rows($res_cal);
              ?>

              <table class="responsive-table centered highlight">
             <thead>

          <tr class="green lighten-2">

              <th>No.</th>
              <th>LINEA</th>
              <th>DESCRIPCIÓN</th>
              <th>KILOMETRAJE</th>
              <th>AUTORIZADO</th>
              <th>NO AUTORIZADO</th>
              <th>ÚLTIMA VERIFICACIÓN</th>

          </tr>
        </thead>

        <?php while ($f_cal = $res_cal->fetch_assoc()) { ?>

          <tr>

            <td><?php echo $f_cal['no'] ?></td>
            <td><?php echo $f_cal['linea'] ?></td>
            <td><?php echo $f_cal['descripcion'] ?></td>
            <td><?php echo $f_cal['kilometraje'] ?></td>
            <td><?php echo $f_cal['autorizado'] ?></td>
            <td><?php echo $f_cal['n_autorizado'] ?></td>
            <td><?php echo $f_cal['ultima_ver'] ?></td>

          </tr>

        <?php }?>

      </table>

            </div>
            <div class="card-action">

            </div>
          </div>
        </div>



      </div>

    </div>
   </div>
  </div>
</div>



<?php include '../extend/scripts.php'; ?>


</body>
</html>
