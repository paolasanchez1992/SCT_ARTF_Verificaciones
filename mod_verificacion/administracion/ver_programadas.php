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
          <form action="ver_programadas.php" method="post">
            <div class="row">
              <div class="col s12 m4">
                <div class="input-field">
                   <i class="material-icons prefix">blur_on</i>
                   <select name="est" id="est" required>
                   <option value="" disabled selected>Selecciona Busqueda</option>
                   <option value="A" >VGCF</option>
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
                            <option value="" disabled selected>Selecciona VGCF</option>
                             <?php
                               $sel_edo = $con->query("SELECT * FROM vgcf");
                                 while ($f_edo = $sel_edo->fetch_assoc()) {
                              ?>
                             <option value="<?php echo  $f_edo['vgcf'] ?>"><?php echo $f_edo['vgcf'] ?></option>
                              <?php } ?>
                       </select>
                     </div>
                   </div>
                  </div>

                  <!--

                  <div class="row" id="vgcf">
                    <div class="col s12 m4">
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
                      <div class="col s12 m4">
                       <div class="res_vgcf"></div>
                      </div>
                      <div class="col s12 m4">
                       <div class="res_linea"></div>
                      </div>
                     </div>

                     <div class="row" id="lin">
                       <div class="col s12 m4">
                        <div class="input-field">
                            <i class="material-icons prefix">blur_on</i>
                             <select name="clin" id="clin" class="validate">
                                  <option value="" disabled selected>Selecciona la Línea</option>
                                   <?php
                                     $sel_l = $con->query("SELECT linea FROM lineas GROUP BY linea ORDER BY linea ASC");
                                       while ($f_l = $sel_l->fetch_assoc()) {
                                    ?>
                                   <option value="<?php echo  $f_l['linea'] ?>"><?php echo $f_l['linea'] ?></option>
                                    <?php } ?>
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
       $estatus = 'A';
        if ($consulta == 'A') {
           // code...
           $vgcf = $con->real_escape_string(htmlentities($_POST['empresa']));
           if (empty($vgcf)) {
              header('location:../extend/alerta.php?msj=Casilla sin seleccionar&c=dir&p=cv&t=error');
            }else {
              $EM = vgcf($vgcf);
              if ($EM == 'IT') {
                $NA = '5';$NB = '7';$NC = '33';$ND = '41';$NE = '48';$NF = '49';

                $sel = $con->prepare("SELECT * FROM vista_verificaciones WHERE vgcf IN (?,?,?,?,?,?) AND estatus = ? ");
                $sel->bind_param('iiiiiis', $NA, $NB, $NC, $ND, $NE, $NF, $estatus );
              }
              elseif ($EM == 'Nte') {
                $NA = '2';$NB = '16';$NC = '21';$ND = '23';$NE = '27';$NF = '32';$NG = '36';$NH = '37';$NI = '39';$NJ = '42';$NK = '46';$NL = '51';$NM = '56';

                $sel = $con->prepare("SELECT * FROM vista_verificaciones WHERE vgcf IN ( ?,?,?,?,?,?,?,?,?,?,?,?,?) AND estatus = ? ");
                $sel->bind_param('iiiiiiiiiiiiis', $NA, $NB, $NC, $ND, $NE, $NF, $NG, $NH, $NI, $NJ, $NK, $NL, $NM,  $estatus );

              }
              elseif ($EM == 'PNte') {
                $NA = '1';$NB = '3';$NC = '9';$ND = '10';$NE = '12';$NF = '19';$NG = '20';$NH = '22';$NI = '26';$NJ = '28';$NK = '30';$NL = '31';$NM = '38';$NN = '40';$NO = '43';$NP = '50';$NQ = '53';$NR = '55';$NS = '57';

                $sel = $con->prepare("SELECT * FROM vista_verificaciones WHERE vgcf IN ( ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) AND estatus = ? ");
                $sel->bind_param('iiiiiiiiiiiiiiiiiis', $NA, $NB, $NC, $ND, $NE, $NF, $NG, $NH, $NI, $NJ, $NK, $NL, $NM, $NN, $NO, $NP, $NQ, $NR, $NS, $estatus );

              }
              elseif ($EM == 'OT') {
                $NA = '8';

                $sel = $con->prepare("SELECT * FROM vista_verificaciones WHERE vgcf = ? AND estatus = ? ");
                $sel->bind_param('is', $NA, $estatus );

              }
              elseif ($EM == 'Ste') {
                $NA = '18';$NB = '24';$NC = '34';$ND = '35';$NE = '44';$NF = '47';

                $sel = $con->prepare("SELECT * FROM vista_verificaciones WHERE vgcf IN (?,?,?,?,?,?) AND estatus = ? ");
                $sel->bind_param('iiiiiis', $NA, $NB, $NC, $ND, $NE, $NF, $estatus );

              }
              elseif ($EM == 'OS') {
                $NA = '17';$NB = '25';$NC = '29';$ND = '45';

                $sel = $con->prepare("SELECT * FROM vista_verificaciones WHERE vgcf IN (?,?,?,?) AND estatus = ? ");
                $sel->bind_param('iiiis', $NA, $NB, $NC, $ND, $estatus );

              }




                 }

        }
        elseif ($consulta == 'B') {
          // code...
           $EM = $con->real_escape_string(htmlentities($_POST['empresa1']));
           $VG = $con->real_escape_string(htmlentities($_POST['li']));
           $LI = $con->real_escape_string(htmlentities($_POST['linea']));
           $LIE = 'SCT_'.$LI;
            if (empty($EM) || empty($VG) || empty($LI)) {
             header('location:../extend/alerta.php?msj=Casilla sin seleccionar&c=dir&p=cv&t=error');
           }else {
             $sel = $con->prepare("SELECT * FROM vista_verificaciones WHERE estatus = ? AND empresa = ? AND vgcf = ? AND id_centro = ? ");
             $sel->bind_param('ssss', $estatus, $EM, $VG, $LIE);
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
          <span class="card-title" style="color: #000000;">NO. DE VERIFICACIONES (<?php echo $row ?>) <center><h4>VERIFICACIONES PROGRAMADAS</h4></center></span>
          <form  action="ins_oficio.php" method="post" name="masivo">
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
                $centro = $f['id_centro'];
                $centro_nom = nombre_centro($centro);
                $A += 1;
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
                <input type="hidden" name="vgc" value="<?php echo $f['vgcf'] ?>">
                <input type="hidden" name="linea" value="<?php echo $f['linea'] ?>">
              <tr>
                <td> <input type="checkbox" name="FTC[]" id="<?php echo $A?>" value="<?php echo $f['id_ver'] ?>"/>
                 <label for="<?php echo $A ?>"></label></td>
                <td><?php echo $centro_nom ?></td>
                <td><?php echo date("d/m/Y", strtotime($fecha1)) ?></td>
                <td><?php echo date("d/m/Y", strtotime($fecha2)) ?></td>
                <td><?php echo $dias?></td>
                <td><?php echo strtoupper($f['lugar']) ?></td>
                <td><?php echo $f['hora']." HORA LOCAL" ?></td>
                <td>
                  <button data-target="modal_des" class="btn-floating btn modal-trigger green tooltipped" data-position="top" data-delay="50" data-tooltip="DESCRIPCIÓN DEL PROGRAMA" onclick="enviades(this.value)" value="<?php echo $f['id_ver'] ?>"><i class="material-icons">sms</i></button>


                </tr>

            <?php } ?>

          </table>

          <div class="row">
            <div class="col s12 m4">
              <div class="input-field">
                <div class="input-field">
                  <i class="material-icons prefix">note</i>
                  <input type="text" name="fol" id="fol" class="center" required>
                  <label for="fol">Folio Oficio de Notificación</label>
                </div>
               </div>
              </div>
            </div>
               <button type="button" class="btn green" onclick="swal({ title: 'Estas seguro de asignar el folio al oficio de Notificación?', text: 'Al asignarlo no hay marcha atras!', type: 'warning', showCancelButton: true, confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Si enviar!' }).then(function () { document.masivo.submit();  })"><i class="material-icons left">send</i>ASIGNAR</button>
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
      $('#lin').css('display','none');

    }
    else if (valorCambiado == 'B') {

      $('#vgcf').css('display','block');
      $('#emp').css('display','none');
      $('#lin').css('display','none');

   }
   else if (valorCambiado == 'C') {
     $('#emp').css('display','none');
     $('#vgcf').css('display','none');
     $('#lin').css('display','block');

  }

  });
</script>


</body>
</html>
