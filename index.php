<?php
include('./view/header.php');
include('./view/footer.php');
?>
<div class="container-full">

<!-- Nav -->
<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container margin-left-nav">
    <div class="row">
      <div class="col-md-2">
        <!-- Navbar brand (Brainiac) y botón colapsable -->
        <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
          <img src="./resources/img/parche-GATI.png" height="100px" width="100px" alt="">
        </div>
      </div>

      <div class="col-md-10">
        <div class="navbar-collapse collapse" id="navbar-main">

          <!-- Navbar botones -->
          <ul class="nav navbar-nav horizontal mar-left">
            <li><a href="inicio.html">Inicio</a></li>
            <li><a href="miembros.html">¿Quiénes somos?</a></li>
            <li><a href="contacto.html">Contacto</a></li>
          </ul>

          <!-- Navbar derecho (Registro, Login) -->
          <ul class="nav navbar-nav navbar-right horizontal">

            <!-- Registro -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registrarse<span class="caret"></span></a>
              <ul class="dropdown-menu dropdown-width">
                <div class="col-lg-12">
                  <div class="text-center">
                    <h3><b>Registro</b></h3></div>
                  <form>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Confirmar contraseña">
                    </div>

                    <!-- Botón Registrase -->
                    <div class="form-group">
                      <div class="row">
                        <div class="col-xs-6 col-xs-offset-3">
                          <input type="submit" class="form-control btn btn-info" value="Registrarse">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </ul>
            </li>

            <!-- Inicio de sesión -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Iniciar sesión <span class="caret"></span></a>
              <ul class="dropdown-menu dropdown-width">
                <div class="col-lg-12">
                  <div class="text-center">
                    <h3><b>Inicio de sesión</b></h3></div>
                  <form>
                    <div class="form-group">
                      <label for="username">Usuario</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="password">Contraseña</label>
                      <input type="password" class="form-control">
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-xs-7">
                          <input type="checkbox">
                          <label for="remember">Recordarme</label>
                        </div>
                        <div class="col-xs-5 pull-right">
                          <input type="submit" class="form-control btn btn-success" value="Log In">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="text-center">
                            <a href="#" class="forgot-password">Olvidaste la contraseña?</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <input type="hidden" class="hide" name="token" id="token" value="a465a2791ae0bae853cf4bf485dbe1b6">
                  </form>
                </div>
              </ul>
            </li>
          </ul>
        </div>
      </div>


    </div>
  </div>
</nav>
</div>


<section class="container-full">

<!-- Main page -->
<div class="row" id="full-page">

  <!-- Sidebar -->
  <div class="col-md-2">
    <div class="profile-sidebar">

      <!-- Sidebar title -->
      <div class="profile-user">
        <div class="profile-name">User</div>
      </div>

      <!-- Sidebar menu -->
      <nav class="profile-menu">
        <ul class="nav navbar vertical">
          <li>
            <a href="#"><i class="material-icons">computer</i> Equipos</a>
          </li>
         
           <li>
            <a href="#"><i class="material-icons">phone</i> Telefonía</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <!-- Content -->
  <div class="col-md-10">

  </div>
</div>
</section>
