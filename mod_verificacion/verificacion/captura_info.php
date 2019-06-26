<?php
include '../extend/header.php';
include '../funciones/centros.php';
include '../funciones/piv.php';
//include '../conexion/tiempo.php';
error_reporting(E_ALL ^ E_NOTICE);

$est = $_SESSION['estado'];
$m1 = date("m");
$m1 = $m1 + 1;
$m1 = '0'.$m1;
$mes = $m1;
//$mes = obtenermes($m1);

//echo $m1;
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
     <span class="card-title">Verificación</span>
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
     <?php $sel = $con->query("SELECT * FROM verificaciones_pro WHERE id_centro = '$est' AND mes_ver = '$m1' AND estatus_pro = '$estatus' ");
      $row = mysqli_num_rows($sel);
     ?>
     <div class="row">
       <div class="col s12">
         <div class="card">
           <div class="card-content">
             <span class="card-title"><center><h4>CALENDARIZACIÓN DE VERIFICACIONES</h4></center></span>
             <table class="centered responsive-table highlight">
               <thead>
                 <tr class="cabecera">
                 <th></th>
                 <th>NO DE VERIFICACIÓN</th>
                 <th>MES</th>
                 <th>ÁREA DE VERIFICACIÓN</th>
                 <th>VGCF</th>
                 <th>OPCIONES</th>
               </tr>
               </thead>
               <?php  while ($f = $sel->fetch_assoc()) {

                 $id = $f['id'];
                 $empresa = $f['empresa'];
                 $vgcf = $f['vgcf'];
                 $linea = $f['linea'];
                 $area = $f['area_ver'];
                  $mes = $f['mes_ver'];

                 $empresa_nom = empresa($empresa);
                 $vgcf_nom = vgcf($vgcf);
                 $linea_nom = linea($linea);
                 $area_ver = area2($area);
                 $mes_nom = mes($mes);
                 ?>
                 <tr>
                   <td><button data-target="modal_des" class="btn-floating btn modal-trigger amber accent-3 tooltipped" data-position="top" data-delay="50" data-tooltip="DESCRIPCIÓN DEL PROGRAMA" onclick="enviades(this.value)" value="<?php echo $f['id'] ?>"><i class="material-icons">sms</i></button></td>
                   <td><?php echo $f['numero_ver'] ?></td>
                   <td><?php echo $mes_nom ?></td>
                   <td><?php echo $area_ver ?></td>
                   <td><?php echo $vgcf_nom ?></td>
                    <td>
                      <a href="cal_verificacion.php?id=<?php echo $f['id'] ?>" class="btn-floating deep-orange accent-2 tooltipped" data-position="top" data-delay="50" data-tooltip="ASIGNACIÓN DE FECHA"><i class="material-icons">insert_invitation</i></a>
                     <?php

                     //Verificar que no halla datos capturados
                       $sel_ver = $con->prepare("SELECT estatus FROM verificaciones WHERE id_ver = ? ");
                       $sel_ver->bind_param('s', $id_ver);
                       $sel_ver->execute();
                       $res_ver = $sel_ver->get_result();
                       if ($f_ver = $res_ver->fetch_assoc()) {
                       $estatus_ver = $f_ver['estatus'];
                       }

                       if (($estatus_ver == 'F') || ($estatus_ver == 'I') || ($estatus_ver == 'P')) {

                       ?>

                        <a href="editar_verificacion.php?id=<?php echo $f['id'] ?>" class="btn-floating blue-grey darken-4 tooltipped" data-position="top" data-delay="50" data-tooltip="EDITAR VERIFICACIÓN"><i class="material-icons">assignment</i></a>

                       <?php
                       }else {
                       ?>
                        <a href="captura_verificacion.php?id=<?php echo $f['id'] ?>" class="btn-floating green darken-2 tooltipped" data-position="top" data-delay="50" data-tooltip="CAPTURA VERIFICACIÓN"><i class="material-icons">assignment</i></a>
                      <?php }?>

                       <a href="#" class="btn-floating green darken-2 tooltipped" data-position="top" data-delay="50" data-tooltip="FINALIZAR VERIFICACIÓN" onclick="swal({ title: 'Estas seguro de finalizar la verificación?', text: 'Al finalizar no hay marcha atras!', type: 'warning', showCancelButton: true, confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Si Finalizar!' }).then(function () {  location.href='finalizar_verificacion.php?id=<?php echo $f['id'] ?>';})"><i class="material-icons">check_circle</i></a>

                     </td>
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
  <div class="modal_des">

  </div>
</div>
<div class="modal-footer">
  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
</div>
</div>

<?php include '../extend/scripts.php'; ?>

<script>
function enviades(valor) {
 $.get('modal_descripcion.php',{
   id:valor,

   beforeSend: function() {
     $('.modal_des').html("Espere un momento por favor...");
     }
   },function(respuesta) {
     $('.modal_des').html(respuesta);
   });
 }
</script>

</body>
</html>
