<?php
include('header.php');
session_start();
?>

<nav class="navbar-dark bg-dark navbar-vertical show">
  <ul class="navbar-nav">
  <img src="./resources/img/parche-GAT2.png"  alt="" class="footer-img">
  <?php if($_SESSION['role'] == 'admin') { ?>
    <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Incidencias
          <span class="sr-only">(current)</span></a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Todas</a>
          <a class="dropdown-item" href="#">Abiertas</a>
          <a class="dropdown-item" href="#">Cerradas</a>
          <!-- divisor
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Cerradas</a> -->
        </div> 
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Equipos</a>
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
<?php if($_SESSION['role']== 'user') {?>
<div class="container">
    <div class="form-container">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Ingrese su email">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
<?php }?>

<?php
include('footer.php');
?>
