<?php
include '../conexion/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nick = $con->real_escape_string(htmlentities($_POST['nick']));
  $pass = $con->real_escape_string(htmlentities($_POST['pass1']));
  $pass1 = sha1($pass);
  $nivel = $con->real_escape_string(htmlentities($_POST['nivel']));
  $nombre = $con->real_escape_string(htmlentities($_POST['nombre']));
  $email = $con->real_escape_string(htmlentities($_POST['email']));
  $bloqueo = '1';

  if (empty($nick) || empty($pass) || empty($nivel) || empty($nombre) || empty($email)) {
  header('location:../extend/alerta.php?msj=Hay un campo sin especificar&c=us&p=in&t=error');
    exit;
  }

  $extension = '';
  $ruta = 'foto_perfil';
  $archivo = $_FILES['foto']['tmp_name'];
  $nombrearchivo = $_FILES['foto']['name'];
  $info = pathinfo($nombrearchivo);
  if ($archivo != '') {
    $extension = $info['extension'];
    if ($extension == 'PNG' || $extension == 'png' || $extension == 'JPG' || $extension == 'jpg' ) {
      move_uploaded_file($archivo,'foto_perfil/'.$nick.'.'.$extension);
      $ruta = $ruta."/".$nick.'.'.$extension;
    }else {
      header('location:../extend/alerta.php?msj=El formato de imagen no es valido&c=us&p=in&t=error');
      exit;
    }
  }else {
    $ruta = "foto_perfil/img.jpg";
  }

    $id = '';

    echo $id."<br>";
    echo $nick."<br>";
    echo $pass1."<br>";
    echo $nombre."<br>";
    echo $email."<br>";
    echo $nivel."<br>";
    echo $bloqueo."<br>";
    echo $ruta."<br>";

$estado = 'SCT_MOR';

    $ins = $con->prepare("INSERT INTO usuarios VALUES (?,?,?,?,?,?,?,?,?)");
    $ins->bind_param("isssssiss", $id, $nick, $pass1, $nombre, $email, $nivel, $bloqueo, $ruta, $estado);

    if ($ins->execute()) {
       header('location:../extend/alerta.php?msj=El usuario ha sido registrado&c=us&p=in&t=success');
    }else {
       header('location:../extend/alerta.php?msj=El usuario no ha sido registrado&c=us&p=in&t=error');
    }

    $ins->close();
    $con->close();

}else {
  header('location:../extend/alerta.php?msj=Utiiza el Formulario&c=us&p=in&t=error');
}

 ?>
