<nav style="background-color: #27594b !important;">
  <a href="" data-activates="menu" class="button-collapse"><i class="material-icons">menu</i></a>
  <div class="nav-wrapper container"><a id="logo-container" href="../" class="brand-logo">SISTEMA ARTF</a></div>
</nav>
<ul id="menu" class="side-nav fixed">
  <li>
    <div class="userView">
      <div class="background">
        <img src="../img/fondo_menu.jpg">
      </div>
      <a href="#"><img src="../usuarios/<?php echo $_SESSION['foto'] ?>" class="circle"></a>
      <a href="#" class="white-text"><?php echo $_SESSION['nombre'] ?></a>
      <a href="#" class="white-text"><?php echo $_SESSION['correo'] ?></a>


    </div>
  </li>

  <!-- Dropdown Trigger -->
 <li><a class="dropdown-trigger" href="#!" data-activates="dropdown1"><i class="material-icons">date_range</i>PIV<i class="material-icons right">arrow_drop_down</i></a></li>

  <li><div class="divider"></div></li>
  <li><a href="captura_info.php"><i class="material-icons">insert_invitation</i>CAL. VERIFICACIÓN</a></li>
  <li><div class="divider"></div></li>
  <li><a href="index.php"><i class="material-icons">event_note</i>SEG. VERIFICACIÓN</a></li>
  <li><div class="divider"></div></li>
  <li><a href="../login/salir.php"><i class="material-icons">cancel</i>SALIR</a></li>
  <li><div class="divider"></div></li>

</ul>

<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="captura_piv.php"><i class="material-icons">subject</i>CAPTURA</a></li>
  <li><a href="registros_piv.php"><i class="material-icons">sms_failed</i>REGISTROS</a></li>
  <li><a href="seguimiento_piv.php"><i class="material-icons">insert_invitation</i>SEGUIMIENTOS</a></li>
  <li><a href="ovis.php"><i class="material-icons">insert_invitation</i>OVIS</a></li>
  <li><div class="divider"></div></li>
</ul>
