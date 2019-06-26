<?php
include '../extend/header.php';
include '../funciones/centros.php';
include '../funciones/piv.php';
//include '../conexion/tiempo.php';
error_reporting(E_ALL ^ E_NOTICE);

$est = $_SESSION['estado'];
$estatus = "I";

/*
//restriccion de fecha
$fecha_dia = date("d");
$hoy = date("H:i:s");
if (($fecha_dia == '15') || ($fecha_dia <= '31')) {
  // code...
  header('location:../extend/alerta.php?msj=Lo sentimos Registros Cerrados por tiempo y fecha&c=ver&p=in&t=error');
}
*/

?>

<div class="row">
 <div class="col s12">
  <div class="card">
    <div class="card-content">
     <span class="card-title"></span>
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
     <?php $sel = $con->query("SELECT * FROM verificaciones_pro WHERE id_centro = '$est'  AND estatus_ini = '$estatus' ORDER BY mes_ver ASC");
      $row = mysqli_num_rows($sel);
     ?>
     <div class="row">
       <div class="col s12">
         <div class="card">
           <div class="card-content">
             <span class="card-title"><center><h4>Registros PIV</h4></center></span>
             <table class="centered responsive-table highlight">
               <thead>
                 <tr class="cabecera">
                 <th>NO DE VERIFICACIÓN</th>
                 <th>MES</th>
                 <th>ÁREA DE VERIFICACIÓN</th>
                 <th>VGCF</th>
                 <th>OPCIONES</th>
               </tr>
               </thead>
               <?php  while ($f = $sel->fetch_assoc()) {
                 $id = $f['id'];
                 $id_centro = $f['id_centro'];
                 $numero_ver = $f['numero_ver'];
                 $tipo_ver = $f['tipo_ver'];
                 $mes = $f['mes_ver'];
                 $area = $f['area_ver'];
                 $vgcf = $f['vgcf'];

                 //llmar a las funciones con los nombres de los campos de las tablas de relación
                 $mes_nom = mes($mes);
                 $area_nom = area($area);
                 $vgcf_nom = vgcf($vgcf);

                 ?>
                 <tr>

                   <td><?php echo $numero_ver ?></td>
                   <td><?php echo $mes_nom ?></td>
                   <td><?php echo $area_nom ?></td>
                   <td><?php echo $vgcf_nom ?></td>
                   <td>
                      <button data-target="modal_des" class="btn-floating btn modal-trigger amber accent-3 tooltipped" data-position="top" data-delay="50" data-tooltip="DESCRIPCIÓN TÉCNICA DEL PROGRAMA" onclick="enviades(this.value)" value="<?php echo $f['id'] ?>"><i class="material-icons">sms</i></button>
                      <button data-target="modal_des2" class="btn-floating btn modal-trigger amber accent-3 tooltipped" data-position="top" data-delay="50" data-tooltip="DESCRIPCIÓN LEGAL DEL PROGRAMA" onclick="enviad(this.value)" value="<?php echo $f['id'] ?>"><i class="material-icons">sms</i></button></td>
                 </tr>

               <?php }?>
             </table>
           </div>
         </div>
       </div>
     </div>
    </div>
   </div>
  </div>
</div>

 <!-- MODALES -->
 <div id="modal_des" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Información</h4>
     <div class="modal_des"></div>
   </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
    </div>
  </div>

  <div id="modal_des2" class="modal modal-fixed-footer">
     <div class="modal-content">
       <h4>Información</h4>
      <div class="modal_info"></div>
    </div>
     <div class="modal-footer">
       <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
     </div>
   </div>

   <?php include '../extend/scripts.php'; ?>
   <script src="../js/modal_piv.js"> </script>
   <script>
   function enviad(valor) {
    $.get('modal_despiv2.php',{
    id:valor,
    beforeSend: function() {
    $('.modal_info').html("Espere un momento por favor...");
    }
   },function(respuesta) {
   $('.modal_info').html(respuesta);
   });
   }
   </script>


</body>
</html>
