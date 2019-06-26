<?php
if ($_SESSION['nivel'] != 'ADMIN') {
   header("Location:bloqueo.php");
}

 ?>
