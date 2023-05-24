<?php
include('header.php');
?>
<section class="section-log">
		<div class="container">
		  <div class="user signinBx">
			<div class="imgBx"><img src="../resources/img/computer.jpg" alt="" /></div>
			<div class="formBx">
			  <form action="login" method="post">
				<h2>Login</h2>
				<input type="text" name="username" placeholder="Usuario" />
				<input type="password" name="password" placeholder="Password" />
				<input type="submit" class="btn btn-primary" value="Login" />
			  </form>
			</div>
		  </div>
	  </section>
<?php
include('footer.php');
?>