<?php
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
// Verifica si hay un mensaje de error almacenado en la variable de sesión
if (isset($_SESSION['login_error'])) {
  echo '<div class="alert alert-danger" role="alert">';
  echo $_SESSION['login_error']; // Muestra el mensaje de error
  echo '</div>';
  unset($_SESSION['login_error']); // Limpia la variable de sesión después de mostrar el mensaje
}
?>
<section class="section-log">
		<div class="container">
		  <div class="user signinBx">
			<div class="imgBx"><img src="./resources/img/computer.jpg" width="50" height="50" alt="" /></div>
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
			  </form>
			</div>
		  </div>
			<div class="user signupBx">
			<div class="formBx">
			  <form action="" method="post">
				<h2>Create an account</h2>
				<input type="hidden" name="action" value="register"> <!-- Agrega un campo oculto con el valor de acción para identificar el formulario -->
				<input type="text" name="tip" placeholder="TIP" />
			  <input type="text" name="oficialPhone" placeholder="Telefono Oficial" />
				<input type="text" name="unit" placeholder="Unidad" />
				<input type="password" name="pass" placeholder="Crear Password" />
				<input type="password" name="pass" placeholder="Confirmar Password" />
				<input type="submit" class="btn btn-primary" name="addregister" value="Registrar" />
				<p class="signup">
				  ¿Ya tiene una cuenta ?
				  <a href="#" onclick="toggleForm();">Login.</a>
				</p>
			  </form>
			<div id="result"></div> <!-- Pinta el resultado del envio asincrono con AJAX -->
			</div>
			<div class="imgBx bg-dark"><img src="./resources/img/parche-GATI3.png" width="50" height="50" alt="" /></div>
		  </div>
		</div>
</section>
<?php
include('footer.php');
?>