<?php @session_start();
$_SESSION = array();
//Removemos sesión.
session_unset();
session_destroy();
header("location:../");
 ?>
