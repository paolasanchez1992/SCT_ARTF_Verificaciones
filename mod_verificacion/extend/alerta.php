<?php
//incluimos la conexion
include '../conexion/conexion.php';
header("Content-Type: text/html;charset=utf-8");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- mandaos a traer las alertas del sweetalert2 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.min.css">
</head>
<body>

  <?php
$mensaje = htmlentities($_GET['msj']);
$c = htmlentities($_GET['c']);
$p = htmlentities($_GET['p']);
$t = htmlentities($_GET['t']);


// ********************** CARPETAS ******************************* \\
switch ($c) {

  // REGRESA A LA CARPETA USUARIOS
  case 'us':
    $carpeta = '../usuarios/';
    break;
  //LOGEO INCORRECTO
  case 'salir':
    $carpeta = '../';
    break;
  //LOGEO ADMINISTRADOR
    case 'adm':
      $carpeta = '../administracion/';
      break;
   //LOGEO DIRECCION
     case 'dir':
      $carpeta = '../administracion/';
      break;
   //LOGEO DIRECCION
     case 'dire':
       $carpeta = '../direccion/';
       break;
   //LOGEO SUBDIRECCION
      case 'sub':
      $carpeta = '../subdireccion/';
      break;
  //LOGEO VERIFICACION
    case 'ver':
     $carpeta = '../verificacion/';
     break;
}

// ********************** ARCHIVOS ******************************* \\

switch ($p) {

// SELECCIONA EL ARCHIVO INDEX
    case 'in':
       $pagina = 'index.php';
       break;
  //LOGEO INCORRECTO
    case 'salir':
       $pagina = '';
       break;
  //LOGEO ADMINISTRADOR
     case 'adm':
       $pagina = 'index.php';
       break;
  //CAPTURA VERIFICACION
     case 'ver':
       $pagina = 'captura_info.php';
       break;
  //UPDATE CALENDARIO VERIFICACION
     case 'cv':
      $pagina = 'cal_verificacion.php';
      break;
      case 'vp':
       $pagina = 'ver_programadas.php';
       break;
       case 'act':
        $pagina = 'actas_programadas.php';
        break;
        case 'cpiv':
         $pagina = 'captura_piv.php';
         break;
         case 'regp':
          $pagina = 'registros_piv.php';
          break;
}

$dir = $carpeta.$pagina;

if ($t == "error") {
  $titulo = "Oppss...";
}else {
  $titulo = "Buen Trabajo.!";
}

   ?>

  <!-- mandaos a traer el jquery -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <!-- mandaos a traer el js de sweetalert2 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.min.js"></script>

  <!--ALERTA -->
<script>
  swal({
    title: '<?php echo $titulo ?>',
    text: "<?php echo $mensaje ?>",
    type: '<?php echo $t ?>',
    confirmButtonColor: '#3085d6',
    confirmButtonText: 'OK'
  }).then(function () {
    location.href='<?php echo $dir ?>';

  });
  $(document).click(function() {
    location.href='<?php echo $dir ?>';
  });
  $(document).keyup(function() {
    if (e.which ==27) {
      location.href='<?php echo $dir ?>';
    }
  });

  </script>

</body>
</html>
