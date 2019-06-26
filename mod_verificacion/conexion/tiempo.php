<?php
@session_start();

    //Tiempo en segundos para dar vida a la sesión.
    $inactivo = 200;//20min en este caso.

    //Calculamos tiempo de vida inactivo.
    $vida_session = time() - $_SESSION['tiempo'];

        //Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
        if($vida_session > $inactivo)
        {

         //echo $_SESSION['Tiempo']."<br>";
         //echo $vida_session;

           header("Location:../login/salir.php");
           exit();
        }
        else {
        //Activamos sesion tiempo.
        $_SESSION['tiempo'] = time();
        //echo $_SESSION['tiempo']."<br>";
        //echo $vida_session;
        }

?>
