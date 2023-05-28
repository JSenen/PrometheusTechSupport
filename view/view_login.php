<?php
include('header.php');
?>
<section class="section-log">
		<div class="container">
		  <div class="user signinBx">
			<div class="imgBx"><img src="./resources/img/computer.jpg" width="50" height="50" alt="" /></div>
			<div class="formBx">
			  <form action="login" method="post">
				<h2>Login</h2>
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
			  <form action="new-user" method="post">
				<h2>Create an account</h2>
				<input type="text" name="firstname" placeholder="TIP" />
			  <input type="text" name="surname" placeholder="Telefono Oficial" />
				<input type="text" name="unit" placeholder="Unidad" />
				<input type="password" name="pass" placeholder="Crear Password" />
				<input type="password" name="pass" placeholder="Confirmar Password" />
				<input type="submit" class="btn btn-primary" value="Registrar" />
				<p class="signup">
				  ¿Ya tiene una cuenta ?
				  <a href="#" onclick="toggleForm();">Login.</a>
				</p>
			  </form>
			<div id="result"></div> <!-- Pinta el resultado del envio asincrono con AJAX -->
			</div>
			<div class="imgBx bg-dark"><img src="./resources/img/parche-GAT2.png" width="50" height="50" alt="" /></div>
		  </div>
		</div>
	  </section>
<?php
include('footer.php');
?>