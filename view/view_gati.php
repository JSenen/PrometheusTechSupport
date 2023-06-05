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
<style>
  .nav-tip {
    color: #F7D060; /* Cambia esto por el color que desees */
}
</style>
<nav class="navbar-dark bg-dark navbar-vertical show">
  <ul class="navbar-nav">
  <img src="./resources/img/parche-GAT2.png"  alt="" class="footer-img">
    <li class="nav-item">
        <a class="nav-tip" href="index.php"><?php echo $_SESSION['user_name'] ?></a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="#">Guía Telefonos</a>
      </li>
    </ul>
  
</nav>
<?php if($_SESSION['role']=== 'user') {?>
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
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Capturas pantalla</label>
            <input type="file" class="form-control" id="exampleFormControlInput1" name="pdfContent">
        </div>
        <input type="hidden" name="action" value="sendticket"> <!-- Agrega un campo oculto con el valor de acción para identificar el formulario -->
        <button type="submit" class="btn btn-primary btn-block" name="sendticket" value="sendticket">Enviar</button>
    </div>
</div>
</form>
<?php }
include('view_modelDescription.php');?>
<script>
    // Función para abrir la ventana modal
    function openModal() {
        document.getElementById("myModal").style.display = "block";
    }

    // Función para cerrar la ventana modal
    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }

    // Abrir la ventana modal al cargar la página
    window.onload = function() {
        openModal();
    };
</script>

<?php
include('footer.php');
?>
