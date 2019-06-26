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
include '../conexion/conexion.php';
//error_reporting(E_ALL ^ E_NOTICE);
error_reporting(0);

//mandamos a trael el nick

$fechaf = $con->real_escape_string($_POST['fechaf']);
//realizamos el Select

//echo $fecha;


$diaf=date("w", strtotime($fechaf));
//echo "<label style='color:red;'>".$dia."</label>";
if ($diaf == 0) {
echo "<script>alert('Estas seguro de seleecionar el dia domingo!')</script>";
}
elseif ($diaf == 6) {
echo "<script>alert('Estas seguro de seleecionar el dia sabado!')</script>";
}

 ?>

 <!-- mandaos a traer el jquery -->
 <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
 <!-- mandaos a traer el js de sweetalert2 -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.min.js"></script>

</body>
</html>
