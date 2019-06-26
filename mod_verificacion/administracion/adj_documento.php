<?php
include '../extend/header.php';
//include '../extend/permiso.php';
  $id_ver = htmlentities($_GET['id_ver']);
  $vgcf = htmlentities($_GET['vgcf']);
  //echo $id_empleado;
?>
  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <span class="card-title"><h4>Adjuntar Archivo PDF</h4></span>
          <form class="form" action="ins_pdf_ordenvisita.php" method="post" enctype="multipart/form-data">
             <input type="hidden" name="id_ver" value="<?php echo $id_ver ?>">
             <input type="hidden" name="vgcf" value="<?php echo $vgcf ?>">
             <div class="file-field input-field">
              <div class="btn">
                <span>Archivo:</span>
                <input type="file" name="foto">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
             </div>

             <button type="submit" class="btn green"><i class="material-icons left">send</i>guardar</button>

          </form>
        </div>
      </div>
    </div>
  </div>
  <?php include '../extend/scripts.php'; ?>
  </body>
  </html>
