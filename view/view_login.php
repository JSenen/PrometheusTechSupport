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
				<input type="text" name="firstname" placeholder="Firtsname" />
			  	<input type="text" name="surname" placeholder="Surname" />
			  	<input type="text" name="dni" placeholder="DNI" />
				<input type="email" name="email" placeholder="Email Address" />
			  	<input type="text" name="username" placeholder="Username" />
				<input type="password" name="pass" placeholder="Create Password" />
				<input type="password" name="pass" placeholder="Confirm Password" />
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