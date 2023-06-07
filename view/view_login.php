<?php
session_start();
include_once('header.php');
include_once('./model/login_model.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if ($_POST['action'] === 'login') {
			// Lógica para procesar el formulario de inicio de sesión
			// Llama a la función que deseas ejecutar para el inicio de sesión
			getLogin();
	} elseif ($_POST['action'] === 'register') {
			// Lógica para procesar el formulario de registro
			// Llama a la función que deseas ejecutar para el registro
			addNewUser();
	}
}
?>
<section class="section-log">
		<div class="container">
		  <div class="user signinBx">
			<div class="imgBx"><img src="./resources/img/parche-GATI-login.png" width="50" height="50" alt="" /></div>
			<div class="formBx">
			  <form action="" method="post">
				<h2>Login</h2>
				<input type="hidden" name="action" value="login"> <!-- Agrega un campo oculto con el valor de acción para identificar el formulario -->
					<input type="text" name="username" placeholder="Usuario" />
					<input type="password" name="password" placeholder="Password" />
					<input type="submit" class="btn btn-primary" value="Login" />
						<p class="signup">
							¿No dispone de cuenta?
							<a href="#" onclick="toggleForm();">Crear registro.</a>
						</p>
						<?php
						// Verifica si hay un mensaje de error almacenado en la variable de sesión
						if (isset($_SESSION['login_error'])) {
							echo '<div id="error-message" class="alert alert-danger" role="alert">';
							echo $_SESSION['login_error']; // Muestra el mensaje de error
							echo '</div>';
							unset($_SESSION['login_error']); // Limpia la variable de sesión después de mostrar el mensaje
						}
						?>

						<script>
							// Espera 5 segundos y luego oculta el mensaje de error
							setTimeout(function() {
								var errorMessage = document.getElementById('error-message');
								if (errorMessage) {
									errorMessage.style.display = 'none';
								}
							}, 3000); 
						</script>
			  </form>
				
			</div>
		  </div>
			<div class="user signupBx">
			<div class="formBx">
			  <form action="" method="post">
				<h2>Crear cuenta</h2>
				<input type="hidden" name="action" value="register"> <!-- Agrega un campo oculto con el valor de acción para identificar el formulario -->
				<input type="text" name="tip" placeholder="TIP" />
			  <input type="text" name="oficialPhone" placeholder="Telefono Oficial" />
				<input type="text" name="unit" placeholder="Unidad" />
				<input type="text" name="email" placeholder="Correo electrónico" />
				<input type="password" name="pass" placeholder="Crear Password" />
				<input type="submit" class="btn btn-primary" name="addregister" value="Registrar" />
				<p class="signup">
				  ¿Ya tiene una cuenta ?
				  <a href="#" onclick="toggleForm();">Login.</a>
				</p>
			  </form>
			<div id="result"></div> <!-- Pinta el resultado del envio asincrono con AJAX -->
			</div>
			<div class="imgBx bg-black img-fluid"><img src="./resources/img/parche-GATI-login.png" class="img-fluid "width="50" height="50" alt="" /></div>
		  </div>
		</div>
</section>
<?php
include('footer.php');
?>