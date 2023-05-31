<?php
include('header.php');
?>

<nav class="navbar-dark bg-dark navbar-vertical show">
  <ul class="navbar-nav">
  <img src="./resources/img/parche-GAT2.png"  alt="" class="footer-img">
    <li class="nav-item">
        <a class="nav-link" href="index.php">Inicio</a>
      </li>
    <?php if($_SESSION['role'] == 'admin') { ?>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Tickets Soporte
          <span class="sr-only">(current)</span></a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Todos</a>
          <a class="dropdown-item" href="#">Abiertas</a>
          <a class="dropdown-item" href="#">Cerradas</a>
        </div> 
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Equipos
          <span class="sr-only">(current)</span></a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Altas</a>
          <a class="dropdown-item" href="#">Asociar</a>
          <a class="dropdown-item" href="#">Pretamos</a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">SSD</a>
          <a class="dropdown-item" href="#">RAM</a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Traslados</a>
          <a class="dropdown-item" href="#">Renovaciones</a> 
        </div> 
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Consultas
          <span class="sr-only">(current)</span></a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Equipos</a>
          <a class="dropdown-item" href="#">Unidades</a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Guia telefonos</a>
        </div> 
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Telefonia</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sirdee</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Usuarios</a>
      </li>    
    </ul>
  <?php
  } ?>     
</nav>
<?php
include('footer.php');
?>
