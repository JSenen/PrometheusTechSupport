<!DOCTYPE html>
<html lang="en">
<head>
<!-- Agrega los enlaces a los archivos CSS de Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="../resources/css/styles.css">
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
<style>
    /* Estilos personalizados */
    body {
      background-color: #27374D; /* Color de fondo de la página */
    }

    .form-container {
      background-color: #526D82; /* Color de fondo del formulario */
      padding: 20px;
      border-radius: 5px;
      margin-top: 30%;

    }
  </style>
</head>
<body>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 well">
      <!-- Formulario de login -->
      <div class="d-flex justify-content-center">
        <div class="form-container">
        <form action="controller/addusuario_controller.php" method="POST">  
          <div class="text-center">
            <!-- Imagen dentro del formulario -->
            <img src="../resources/img/parche-GATI.png" alt="Imagen" class="img-fluid rounded-circle" style="max-width: 200px;">
          </div>
          <h4 class="text-success">Introduce nombre y contraseña...</h4>
          <hr style="border-top:1px groovy #000;">
          <div class="form-group">
            <label class="text-white">Usuario</label> 
            <input type="text" class="form-control" name="nick" />
          </div>
          <div class="form-group">
            <label class="text-white">Password</label>
            <input type="text" class="form-control" name="passwrd" />
          </div>
          <br />
          <div class="form-group">
            <button class="btn btn-primary form-control" name="login">Login</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>