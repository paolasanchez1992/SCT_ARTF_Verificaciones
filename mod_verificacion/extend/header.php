<?php
include '../conexion/conexion.php';
if (!isset($_SESSION['nick'])) {
  header('Location:../');
  // code...
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- mandaos a traer el css de materialize -->
  <link rel="stylesheet" href="../css/materialize.min.css">
  <link rel="stylesheet" href="../css/animations.css">
  <!-- FullCalendar -->
	<link rel="stylesheet" href="../css/estilos.css">
  <!-- mandaos a traer el css de iconos materialize -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- mandaos a traer las alertas del sweetalert2 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.min.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


  <!-- Descripcion
  <meta name="description" content="SCT" />
  <meta name="author" content="http://www.adelanto15.com.mx" />
  <meta name="keywords" content="adelanto de nómina, nómina, adelantos" />
  -->
  <link rel="shortcut icon" href="../img/iconartf.png">
  <title>ARTF</title>

   <style media="screen">
       header, main, footer {
        padding-left: 300px;
        }

       .button-collapse {
        display: none;
        }

    @media only screen and (max-width : 992px) {
       header, main, footer {
       padding-left: 0;
        }
       .button-collapse{
       display: inherit;
       }
    }

    .modal { width: 100% !important ; height: 100% !important ; }

    #cambio { display : none; }
    #emp { display : none; }
    #vgcf { display : none; }
    #lina { display : none; }

    body {
     background: url('../img/body/fondo.jpg') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
     }

     .btn {
       background-color: #27594b !important;
     }

     #chart_wrap {
         position: relative;
         padding-bottom: 100%;
         height: 0;
         overflow:hidden;
     }
     #piechart {
         position: absolute;
         top: 0;
         left: 0;
         width:100%;
         height:500px;
     }

   </style>


</head>
  <body class="grey lighten-2">
   <main>
<?php
     if ($_SESSION['nivel'] == 'ADMIN'){
            include 'menu_admin.php';
     }
     elseif ($_SESSION['nivel'] == 'DIRECTOR') {
            include 'menu_director.php';
     }
     elseif ($_SESSION['nivel'] == 'DIRECTORN') {
            include 'menu_directorn.php';
     }
     elseif ($_SESSION['nivel'] == 'DIRECTORC') {
            include 'menu_directorc.php';
     }
     elseif ($_SESSION['nivel'] == 'DIRECTORS') {
            include 'menu_directors.php';
     }
     elseif ($_SESSION['nivel'] == 'SUBDIRECTORS') {
            include 'menu_subs.php';
     }
     elseif ($_SESSION['nivel'] == 'SUBDIRECTORC') {
            include 'menu_subc.php';
     }
     elseif ($_SESSION['nivel'] == 'SUBDIRECTORN') {
            include 'menu_subn.php';
     }
     elseif ($_SESSION['nivel'] == 'VERIFICADOR') {
            include 'menu_verificador.php';
     }

?>
