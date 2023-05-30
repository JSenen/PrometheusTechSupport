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
  <div class="container d-flex justify-content-center align-items-center" style="height: 75vh;">
    <div class="form-container" style="width: 600px;">
        <div class="form-group text-center">
            <img class="mb-4" src="./resources/img/ticket.jpeg" alt="" width="200" height="200">
            <h4>Bienvenido , <?php echo $_SESSION['user_name'];?></h4>
            <h3 class="mb-3">ALTA TICKET DE SOPORTE</h3>
            <label for="nombre">Descripcion:</label>
            <textarea class="form-control" id="description" placeholder="Detalle la incidencia" rows="6"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
    </div>
</div>
<?php }?>

<?php
include('footer.php');
?>
