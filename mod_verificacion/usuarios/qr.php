
<?php
//Agregamos la libreria para genera códigos QR
require "../codigos_qr/phpqrcode/qrlib.php";

//Declaramos una carpeta temporal para guardar la imagenes generadas
$dir = '../codigos_qr/generados/';

//Si no existe la carpeta la creamos
if (!file_exists($dir))
      mkdir($dir);

      //Declaramos la ruta y nombre del archivo a generar
$filename = $dir.'test.png';

      //Parametros de Condiguración

$tamano = 10; //Tamaño de Pixel
$level = 'L'; //Precisión Baja
$framSize = 3; //Tamaño en blanco
$contenido = "hola Lic. Amaya"; //Texto

      //Enviamos los parametros a la Función para generar código QR
      QRcode::png($contenido, $filename, $level, $tamano, $framSize);

      //Mostramos la imagen generada
echo '<img src="'.$dir.basename($filename).'" /><hr/>';
?>
