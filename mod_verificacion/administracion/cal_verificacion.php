<?php
include '../extend/header.php';
include '../funciones/centros.php';
include '../funciones/piv.php';
//include '../conexion/tiempo.php';
?>


<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <span class="card-title"></span>
          <form action="cal_verificacion.php" method="post">
            <div class="row">
              <div class="col s12 m4">
                <div class="input-field">
                   <i class="material-icons prefix">blur_on</i>
                   <select name="est" id="est" required>
                   <option value="" disabled selected>Selecciona Busqueda</option>
                   <option value="A" >CENTRO SCT</option>
                   <!--<option value="B" >EMPRESA / VGCF</option>
                   <option value="C" >LÍNEA</option>-->
                   </select>
                </div>
               </div>
              </div>

               <div class="row" id="emp">
                 <div class="col s12 m4">
                  <div class="input-field">
                      <i class="material-icons prefix">blur_on</i>
                       <select name="empresa" id="empresa" class="validate">
                            <option value="" disabled selected>Selecciona EL Centro</option>
                             <?php
                               $sel_edo = $con->query("SELECT id_centro, nombre_centro FROM centros_sct");
                                 while ($f_edo = $sel_edo->fetch_assoc()) {
                              ?>
                             <option value="<?php echo  $f_edo['id_centro'] ?>"><?php echo $f_edo['nombre_centro'] ?></option>
                              <?php } ?>
                       </select>
                     </div>
                   </div>
                  </div>

                  <div class="row" id="vgcf">
                    <div class="col s12 m3">
                     <div class="input-field">
                         <i class="material-icons prefix">blur_on</i>
                          <select name="empresa1" id="empresa1"  class="validate">
                               <option value="" disabled selected>Selecciona Empresa</option>
                                <?php
                                  $sel_edo = $con->query("SELECT * FROM empresas");
                                    while ($f_edo = $sel_edo->fetch_assoc()) {
                                 ?>
                                <option value="<?php echo  $f_edo['id'] ?>"><?php echo $f_edo['nombre_c'] ?></option>
                                 <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="col s12 m3">
                       <div class="res_vgcf"></div>
                      </div>
                      <div class="col s12 m3">
                       <div class="res_linea"></div>
                      </div>
                      <div class="col s12 m3">
                       <div class="res_edo"></div>
                      </div>
                     </div>

<!--
                     <div class="row" id="lina">
                       <div class="col s12 m4">
                        <div class="input-field">
                            <i class="material-icons prefix">blur_on</i>
                             <select name="clin" id="clin" class="validate">
                                  <option value="" disabled selected>Selecciona la Línea</option>
                                   <?php
                                     //$sel_l = $con->query("SELECT linea FROM lineas GROUP BY linea ORDER BY linea ASC");
                                      // while ($f_l = $sel_l->fetch_assoc()) {
                                    ?>
                                   <option value="<?php //echo  $f_l['linea'] ?>"><?php //echo $f_l['linea'] ?></option>
                                    <?php //} ?>
                             </select>
                           </div>
                         </div>
                        </div>
                      -->

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







  <!--MOSTRAR DATOS DE CONSULTA-->
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $consulta = $con->real_escape_string(htmlentities($_POST['est']));
       $estatus = 'R';
        if ($consulta == 'A') {
           // code...
           $EM = $con->real_escape_string(htmlentities($_POST['empresa']));
           if (empty($EM)) {
              header('location:../extend/alerta.php?msj=Casilla sin seleccionar&c=dir&p=cv&t=error');
            }else {
              $sel = $con->prepare("SELECT * FROM vista_verificaciones WHERE estatus = ? AND id_centro = ? ");
              $sel->bind_param('si', $estatus, $EM );
              //echo $EM;
                 }

        }
        elseif ($consulta == 'B') {
          // code...
           $EM = $con->real_escape_string(htmlentities($_POST['empresa1']));
           $VG = $con->real_escape_string(htmlentities($_POST['li']));
           $LI = $con->real_escape_string(htmlentities($_POST['linea']));

          // echo $EM;
           //echo $VG;
           echo $LI;
           if (empty($EM) || empty($VG) || empty($LI)) {
            header('location:../extend/alerta.php?msj=Casilla sin seleccionar&c=dir&p=cv&t=error');
          }else {
            $sel = $con->prepare("SELECT * FROM vista_verificaciones WHERE estatus = ? AND empresa = ? AND vgcf = ? AND id_centro = ? ");
            $sel->bind_param('siii', $estatus, $EM, $VG, $LI);
               }


        }
        elseif ($consulta == 'C') {
          // code...
           $CLIN = $con->real_escape_string(htmlentities($_POST['clin']));

            if (empty($CLIN)) {
             header('location:../extend/alerta.php?msj=Casilla sin seleccionar&c=dir&p=cv&t=error');
           }else {
             $sel = $con->prepare("SELECT * FROM vista_verificaciones WHERE estatus = ? AND linea = ? ");
             $sel->bind_param('ss', $estatus, $CLIN);
                }
        }


        $NA = '2';$NB = '7';$NC = '8';$ND = '10';$NE = '19';$NF = '24';$NG = '26';$NH = '28';$NI = '32';
        $CA = '1';$CB = '5';$CC = '9';$CD = '11';$CE = '12';$CF = '14';$CG = '15';$CH = '16';$CI = '18';$CJ = '22';$CK = '25';
        $SA = '4';$SB = '6';$SC = '17';$SD = '20';$SE = '21';$SF = '27';$SG = '29';$SH = '30';$SI = '31';




      $sel->execute();
      $res = $sel->get_result();
      $row = mysqli_num_rows($res);
  ?>


    <!--BUSCAR USUARIOS -->
    <div class="row">
      <div class="col s12">
        <nav class="grey lighten-1">
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

  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-image">

        </div>
        <div class="card-content">
          <span class="card-title" style="color: #000000;">NO. DE VERIFICACIONES (<?php echo $row ?>) <center><h4>VERIFICACIONES A PROGRAMAR</h4></center></span>
          <form  action="env_ver.php" method="post" name="masivo">
          <table class="centered responsive-table highlight">
            <thead>
              <tr class="cabecera">
              <th></th>
              <th>CENTRO</th>
              <th>FECHA INICIO</th>
              <th>FECHA TÉRMINO</th>
              <th>DÍAS DE VERIFICACIÓN</th>
              <th>LUGAR DE REUNIÓN</th>
              <th>HORA DE ENCUENTRO</th>
              <th></th>
            </tr>
            </thead>
            <?php
               $A=1;
              while ($f = $res->fetch_assoc()) {
                $A += 1;
                $centro = $f['id_centro'];
                $nom_centro = nombre_centro($centro);
                $fecha1 = $f['fecha'];
                $fecha2 = $f['fecha_f'];
                $dias = diferenciaDias($fecha1,$fecha2);
                if ($dias == '0') {
                  $dias='1';
                }
                else {
                  $dias=$dias+1;
                }

              ?>
                <input type="hidden" name="centro" value="<?php echo $f['id_centro'] ?>">
              <tr>
                <td> <input type="checkbox" name="FTC[]" id="<?php echo $A?>" value="<?php echo $f['id_ver'] ?>"/>
                 <label for="<?php echo $A ?>"></label></td>

                <td><?php echo $nom_centro ?></td>
                <td><?php echo date("d/m/Y", strtotime($fecha1)) ?></td>
                <td><?php echo date("d/m/Y", strtotime($fecha2)) ?></td>
                <td><?php echo $dias?></td>
                <td><?php echo strtoupper($f['lugar']) ?></td>
                <td><?php echo $f['hora']." HORA LOCAL" ?></td>
                <td>
                  <button data-target="modal_des" class="btn-floating btn modal-trigger green tooltipped" data-position="top" data-delay="50" data-tooltip="DESCRIPCIÓN DEL PROGRAMA" onclick="enviades(this.value)" value="<?php echo $f['id_ver'] ?>"><i class="material-icons">sms</i></button>
                  <button data-target="modal_cal" class="btn-floating btn modal-trigger grey darken-1 tooltipped" data-position="top" data-delay="50" data-tooltip="Editar Verificación" onclick="editcal(this.value)" value="<?php echo $f['id_ver']; ?>"><i class="material-icons">border_color</i></button></td>

                </tr>

            <?php } ?>

          </table>
          <button type="button" class="btn green" onclick="swal({ title: 'Estas seguro de enviar los registros a Dirección?', text: 'Al enviarlos ya no hay marcha atras!', type: 'warning', showCancelButton: true, confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Si enviar!' }).then(function () { document.masivo.submit();  })"><i class="material-icons left">send</i>ENVIAR</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php
     }
     else {
  //   header('location:../extend/alerta.php?msj=Utiiza el Formulario&c=dir&p=cv&t=error');
     }
   ?>


  <!-- MODALES -->
  <div id="modal_cal" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>Información</h4>
    <div class="modal_ed">

    </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
  </div>
  </div>

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
<script src="../js/modalver.js"></script>
<script src="../js/empresa.js"></script>


<script>
$('#est').change(function(){
    var valorCambiado=$(this).val();

    if(valorCambiado == 'A'){
      $('#emp').css('display','block');
      $('#vgcf').css('display','none');
      $('#lina').css('display','none');

    }
    else if (valorCambiado == 'B') {

      $('#vgcf').css('display','block');
      $('#emp').css('display','none');
      $('#lina').css('display','none');

   }
   else if (valorCambiado == 'C') {
     $('#emp').css('display','none');
     $('#vgcf').css('display','none');
     $('#lina').css('display','block');

  }

  });
</script>


</body>
</html>
