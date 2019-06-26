<?php
include '../extend/header.php';
include '../funciones/centros.php';
include '../funciones/piv.php';
//include '../conexion/tiempo.php';
error_reporting(E_ALL ^ E_NOTICE);

$est = $_SESSION['estado'];
$estatus = "S";

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
           <span class="card-title">Titulo</span>
             <form  action="registros_piv.php" method="post">
              <div class="row">
                  <div class="col s12 m6">
                      <div class="input-field">
                           <i class="material-icons prefix">blur_on</i>
                            <select name="estado" class="validate" required>
                            <option value="" disabled selected>Selecciona Estado</option>
                            <?php
                             if ($_SESSION['nivel'] == 'ADMIN') {
                                       $sel_edo = $con->query("SELECT * FROM estados");
                              }elseif($_SESSION['nivel'] == 'DIRECTOR') {
                                      $sel_edo = $con->query("SELECT * FROM estados");
                               }elseif(($_SESSION['nivel'] == 'DIRECTORN') || ($_SESSION['nivel'] == 'SUBDIRECTORN')) {
                                       $sel_edo = $con->query("SELECT * FROM estados WHERE zona='N'");
                                }
                                elseif(($_SESSION['nivel'] == 'DIRECTORC') || ($_SESSION['nivel'] == 'SUBDIRECTORC')) {
                                        $sel_edo = $con->query("SELECT * FROM estados WHERE zona='C'");
                                 }elseif(($_SESSION['nivel'] == 'DIRECTORS') || ($_SESSION['nivel'] == 'SUBDIRECTORS')) {
                                         $sel_edo = $con->query("SELECT * FROM estados WHERE zona='S'");
                                  }


                               while ($f_edo = $sel_edo->fetch_assoc()) { ?>
                                <option value="<?php echo  $f_edo['idestado'] ?>"><?php echo $f_edo['estado'] ?></option>
                        <?php } ?>
                  </select>
              </div>
          </div>
         </div>
          <div class="row">
            <div class="col s12 m6">
              <button type="submit" class="btn green"><i class="material-icons left">send</i>Consultar</button>
            </div>
            </div>
           </form>
        </div>
      </div>
     </div>
  </div>



  <!--MOSTRAR USUARIOS -->
  <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id_estado = $con->real_escape_string(htmlentities($_POST['estado']));
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
     <?php $sel = $con->query("SELECT * FROM verificaciones_pro WHERE id_centro = '$id_estado'  AND estatus_ini = '$estatus' ");
      $row = mysqli_num_rows($sel);
     ?>
     <div class="row">
       <div class="col s12">
         <div class="card">
           <div class="card-content">
             <span class="card-title"><center><h4>Registros PIV</h4></center></span>
             <table class="centered responsive-table highlight">
               <form  action="fin_piv.php" method="post" name="masivo">
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
               <?php
                 $A=1;
                 while ($f = $sel->fetch_assoc()) {
                 $A += 1;
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
                 <input type="hidden" name="id_centro" value="<?php echo $id_centro ?>">
                 <tr>
                   <td> <input type="checkbox" name="FTC[]" id="<?php echo $A?>" value="<?php echo $id ?>"/>
                   <label for="<?php echo $A ?>"></label></td>
                   <td><?php echo $numero_ver ?></td>
                   <td><?php echo $mes_nom ?></td>
                   <td><?php echo $area_nom ?></td>
                   <td><?php echo $vgcf_nom ?></td>
                   <td>

                      <button data-target="modal_des" class="btn-floating btn modal-trigger grey darken-1 tooltipped" data-position="top" data-delay="50" data-tooltip="DESCRIPCIÓN TÉCNICA DEL PROGRAMA" onclick="enviades(this.value)" value="<?php echo $f['id'] ?>"><i class="material-icons">sms</i></button>
                      <button data-target="modal_des2" class="btn-floating btn modal-trigger grey darken-1 tooltipped" data-position="top" data-delay="50" data-tooltip="DESCRIPCIÓN LEGAL ++DEL PROGRAMA" onclick="enviad(this.value)" value="<?php echo $f['id'] ?>"><i class="material-icons">sms</i></button>
                      <a href="dev_piv.php?id=<?php echo $id ?>" class="btn-floating  waves-effect teal darken-4 tooltipped" data-position="top" data-delay="50" data-tooltip="CORRECCIÓN DE REGISTRO"><i class="material-icons">rotate_right</i></a></td>
                 </tr>

               <?php }?>
             </table>
               <br>
              <button type="button" class="btn green" onclick="swal({ title: 'Estas seguro de Finalizar los Registros?', text: 'Recuerda seleccionar todas las casillas, al finalizar no hay marcha a tras!', type: 'warning', showCancelButton: true, confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Si enviar!' }).then(function () { document.masivo.submit();  })"><i class="material-icons left">send</i>FINALIZAR</button>
            </form>
           </div>
         </div>
       </div>
     </div>
    </div>
   </div>
  </div>
</div>

<?php
}else {

}
 ?>

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
