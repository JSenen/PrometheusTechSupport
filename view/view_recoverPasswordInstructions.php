<?php
include('header.php');
?>
<style>
  .nav-tip {
    color: #F7D060; /* Cambia esto por el color que desees */
}
</style>
<nav class="navbar-dark bg-dark navbar-vertical show">
  <ul class="navbar-nav">
  <img src="./resources/img/parche-GAT2.png"  alt="" width="100" height="100">
  <li class="nav-item">
     <a class="nav-tip" href="index.php">Inicio</a>
  </li>
</nav>
  <div class="container d-flex justify-content-center align-items-center" style="height: 85vh;">
    <div class="form-container" style="width: 600px;">        
        <div class="form-group text-center">
            <img class="mb-1" src="./resources/img/forgot-password-icon-18350.png" alt="" width="200" height="200">
            <h5 class="mb-1">RELLENE EL FORMULARIO CON SU TIP Y SE ENVIARÁ CORREO ELECTRÓNICO DE RECUPERACIÓN DE CONTRASEÑA</h5>
            <h5 class="mb-1">SIGA EL ENLACE DEL CORREO ENVIADO A LA CUENTA QUE FACILITO EN EL REGISTRO</h4>
            <div></div>
            <p>En caso de problemas pongase en contacto con el GATI de Barcelona</p>
        </div>
        <div class="user signupBx">
      
			<div class="formBx">
			  <form action="" method="post">
				<input type="hidden" name="action" value="recover"> <!-- Agrega un campo oculto con el valor de acción para identificar el formulario -->
				<input type="text" name="tip" id="TIPInput" placeholder="TIP" class="form-control"/>
							<div id="tipValidation" class="invalid-feedback">
								Por favor, introduzca TIP valida
							</div>
				<input type="submit" class="btn btn-primary form-control" name="tipRecover" value="Restablecer Contraseña" />
			  </form>
				<script>setupFormValidations()</script>
		
		  </div>
		</div>
    </div>       
           
</div>



<?php
include('footer.php');
?>