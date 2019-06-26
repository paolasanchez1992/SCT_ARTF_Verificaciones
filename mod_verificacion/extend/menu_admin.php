<nav class="green darken-3">
  <a href="" data-activates="menu" class="button-collapse"><i class="material-icons">menu</i></a>
  <div class="nav-wrapper container"><a id="logo-container" href="../" class="brand-logo">SISTEMA ARTF</a></div>
</nav>
<ul id="menu" class="side-nav fixed">
  <li>
    <div class="userView">
      <div class="background">
        <img src="../img/fondo_menu.jpg">
      </div>
      <a href="../perfil/index.php"><img src="../usuarios/<?php echo $_SESSION['foto'] ?>" class="circle"></a>
      <a href="../perfil/perfil.php" class="white-text"><?php echo $_SESSION['nombre'] ?></a>
      <a href="" class="white-text"><?php echo $_SESSION['correo'] ?></a>


    </div>
  </li>
  <li><a href="../usuarios/index.php"><i class="material-icons">home</i>ALTA DE USUARIOS</a></li>
  <li><div class="divider"></div></li>
  <li><a href="../login/salir.php"><i class="material-icons">cancel</i>SALIR</a></li>
  <li><div class="divider"></div></li>

</ul>
