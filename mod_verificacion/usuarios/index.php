<?php
include '../extend/header.php';
include '../extend/permiso.php';


?>

<div class="row">
 <div class="col s12">
  <div class="card">
    <div class="card-content">
     <span class="card-title">Alta de Usuarios</span>
     <form class="form" action="in_usuarios.php" method="post" enctype="multipart/form-data">

        <div class="input-field">
          <input type="text" name="nick" id="nick" required autofocus title="EL NICK DEBE DE CONTENER 8 Y 5 CARACTERES, SOLO LETRAS" pattern="[A-Za-z]{8,15}" onblur="may(this.value, this.id)">
          <label for="nick">Nick</label>
        </div>

        <div class="validacion"></div>

        <div class="input-field">
          <input type="password" name="pass1" id="pass1" required  title="CONTRASEÑA CON NÚMEROS, LETRAS MAYUSCULAS Y MINUSCULAS ENTRE 8 Y 15 CARACTERES" pattern="[A-Za-z0-9]{8,15}">
          <label for="pass1">Contraseña</label>
         </div>

        <div class="input-field">
          <input type="password" id="pass2" required  title="CONTRASEÑA CON NÚMEROS, LETRAS MAYUSCULAS Y MINUSCULAS ENTRE 8 Y 15 CARACTERES" pattern="[A-Za-z0-9]{8,15}">
          <label for="pass2">Repetir Contraseña</label>
        </div>

        <div class="input-field">
          <select name="nivel" required>
          <option value="" disabled selected>Selecciona el Nivel de Usuario</option>
          <option value="ADMIN">ADMINISTRADOR</option>
          <option value="DIRECTOR">DIRECTOR</option>
          <option value="DIRECTORN">DIRECTOR ZONA NORTE</option>
          <option value="DIRECTORC">DIRECTOR ZONA CENTRO</option>
          <option value="DIRECTORS">DIRECTOR ZONA SURESTE</option>
          <option value="SUBDIRECTORN">SUBDIRECTOR ZONA NORTE</option>
          <option value="SUBDIRECTORC">SUBDIRECTOR ZONA CENTRO</option>
          <option value="SUBDIRECTORS">SUBDIRECTOR ZONA SURESTE</option>
          <option value="VERIFICADOR">VERIFICADOR</option>
          <option value="OPERACION">OPERACIÓN</option>
          </select>
        </div>

        <div class="input-field">
          <input type="text" name="nombre" id="nombre" required  title="Nombre completo del usuario" onblur="may(this.value, this.id)" pattern="[A-Z/s ]+">
          <label for="nombre">Nombre de Usuario</label>
        </div>

        <div class="input-field">
          <input type="email" name="email" id="email" required  title="Ingresa el correo electrónico">
          <label for="email">E-mail</label>
        </div>

        <div class="file-field input-field">
        <div class="btn">
          <span>Foto:</span>
          <input type="file" name="foto">
       </div>
       <div class="file-path-wrapper">
          <input class="file-path validate" type="text">
       </div>
      </div>

      <button type="submit" class="btn green" id="btn_guardar"><i class="material-icons left">send</i>guardar</button>


   </form>
    </div>
   </div>
  </div>
</div>
<!-- FIN CAPTURA USUARIOS -->

<!--BUSCAR USUARIOS -->
<div class="row">
  <div class="col s12">
    <nav class="grey lighten-2">
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

<!--MOSTRAR USUARIOS -->
<?php $sel = $con->query("SELECT * FROM usuarios");
 $row = mysqli_num_rows($sel);
?>
<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <span class="card-title">Usuarios (<?php echo $row ?>)</span>
        <table class="centered responsive-table highlight">
          <thead>
            <tr class="cabecera">
            <th>Nombre</th>
            <th>Nick</th>
            <th>Email</th>
            <th>Nivel</th>
            <th></th>
            <th>Estatus</th>
            <th>Foto</th>
            <th></th>
            <th></th>
          </tr>
          </thead>
          <?php while ($f = $sel->fetch_assoc()) { ?>
            <tr>
              <td><?php echo $f['nombre'] ?></td>
              <td><?php echo $f['nick'] ?></td>
              <td><?php echo $f['correo'] ?></td>
              <td>
               <form action="up_nivel.php" method="post">
                 <input type="hidden" name="id" value="<?php echo $f['id'] ?>">
                 <select name="nivel" required>
                   <option value="<?php echo $f['nivel'] ?>"><?php echo $f['nivel'] ?></option>
                   <option value="ADMIN">ADMINISTRADOR</option>
                   <option value="DIRECTOR">DIRECTOR</option>
                   <option value="DIRECTORN">DIRECTOR ZONA NORTE</option>
                   <option value="DIRECTORC">DIRECTOR ZONA CENTRO</option>
                   <option value="DIRECTORS">DIRECTOR ZONA SURESTE</option>
                   <option value="SUBDIRECTORN">SUBDIRECTOR ZONA NORTE</option>
                   <option value="SUBDIRECTORC">SUBDIRECTOR ZONA CENTRO</option>
                   <option value="SUBDIRECTORS">SUBDIRECTOR ZONA SURESTE</option>
                   <option value="VERIFICADOR">VERIFICADOR</option>
                   <option value="OPERACION">OPERACIÓN</option>
                 </select>

              </td>
              <td><button type="submit" class="btn-floating"><i class="material-icons">repeat</i></button></form></td>

              <td>
              <?php if ($f['bloqueo'] == 1) { ?>
                <a href="bloqueo_manual.php?us=<?php echo $f['id'] ?>&bl=<?php echo $f['bloqueo'] ?>"><i class="material-icons green-text">lock_open</i></a>
              <?php  }else{ ?>
                <a href="bloqueo_manual.php?us=<?php echo $f['id'] ?>&bl=<?php echo $f['bloqueo'] ?>"><i class="material-icons red-text">lock_outline</i></a>
              <?php  } ?>
              </td>
              <td><img src="<?php echo $f['foto'] ?>" width="50" class="circle"> </td>
              <td><a href="#" class="btn-floating red" onclick="swal({ title: 'Estas seguro de eliminar el usuario?', text: 'Al eliminarlo no podras recuperarlo!', type: 'warning', showCancelButton: true, confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Si eliminarlo!' }).then(function () {  location.href='eliminar_user.php?id=<?php echo $f['id'] ?>';})"><i class="material-icons">cancel</i></a></td>
            </tr>

          <?php }?>
        </table>
      </div>
    </div>
  </div>
</div>

<?php include '../extend/scripts.php'; ?>
<!-- validamos que el usuario no este duplicado -->
<script src="../js/validacion_usuario.js"></script>

</body>
</html>
