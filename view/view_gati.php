<?php
include('header.php');
include_once('./model/recordticket_model.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if ($_POST['action'] === 'sendticket') {
			// Lógica para procesar el formulario de inicio de sesión
			// Llama a la función que deseas ejecutar para el inicio de sesión
			addTicket();
	} 
}
?>

<nav class="navbar-dark bg-dark navbar-vertical show">
  <ul class="navbar-nav">
  <img src="./resources/img/parche-GAT2.png"  alt="" class="footer-img">
    <li class="nav-item">
        <a class="nav-link active" href="index.php">Inicio</a>
      </li>
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
  <form action="" method="post">
  <div class="container d-flex justify-content-center align-items-center" style="height: 85vh;">
    <div class="form-container" style="width: 600px;">        
        <div class="form-group text-center">
            <img class="mb-1" src="./resources/img/ticket.jpeg" alt="" width="200" height="200">
            <h5>Bienvenido , <?php echo $_SESSION['user_name'];?></h5>
            <h4 class="mb-1">ALTA TICKET DE SOPORTE</h4>
            <div class="form-group">
            <label for="asunto">ASUNTO:</label>
            <input type="text" class="form-control" name="theme_computer" placeholder="Ingrese asunto">
        </div>
            <label for="nombre">Descripcion:</label>
            <textarea class="form-control" name="description" placeholder="Detalle la incidencia" rows="6"></textarea>            
        </div>
        <div class="form-group">
            <label for="label">ETIQUETA EQUIPO:</label>
            <input type="text" class="form-control" name="label_computer" placeholder="Ingrese etiqueta del equipo">
        </div>
        <div class="form-group">
            <label for="IP">IP:</label>
            <input type="text" class="form-control" name="ip_computer" placeholder="Ingrese IP del equipo">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
        <input type="hidden" name="action" value="sendticket">
    </div>
</div>
</form>
<?php }?>

<?php
include('footer.php');
?>
