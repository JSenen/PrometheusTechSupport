<?php
include_once('./domain/User.php');
function getLogin()
{
  $connection = new Conecction();
  $dbh = $connection->getConection();

  if(isset($_POST['name'], $_POST['password']))
  {
    $name = $_POST['name'];
    $passwrd = $_POST['password'];

    $stmt = $dbh->prepare("SELECT * FROM users WHERE user_name = :name");
    $stmt->bindParam(":name", $name, PDO::PARAM_STR);
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $row = $stmt->rowCount();

    if ($row > 0) {
      
      //Si el número de filas >0 el usuario existe    
      foreach ($resultado as $user) {
        $pass = $user['user_password'];
        if (password_verify($passwrd, $pass)){
           //comprobamos que la contraseña descifrada coincida
           session_start(); //Iniciamos sesion
           $username = $user['user_name']; 
           $userphone = $user['user_phone']; 
           $userunit = $user['user_unit']; 
           $userrole = $user['role'];
           $_SESSION['user_name'] = $username; 
           $_SESSION['user_unit'] = $userunit; 
           $_SESSION['role'] = $userrole; 
           $_SESSION['user_phone'] = $userphone;
 
           setcookie('prometheus', '', 86400); //Establecemos una cokkie de 1 dia
           header('location: ./view/view_gati.php'); //Enviamos a la página para usuarios registrados

        }
         
        }

      }

    } else {
      $sec = 3; //Segundos aparece mensaje de login no valido
            echo '<script>';
            echo 'alert("LOGIN FALLIDO");';
            echo '</script>';
      include('./view/error_header_view.php');
      session_write_close(); //Borramos sesiones anteriores
      header("Refresh: $sec; url=index.php"); 
    }
  }
  /* TODO COMPROBAR CONDICIONALES

function addNewUser(){
  $conenection = new Conecction();
  $dbh = $conenection->getConection();

  if(isset($_POST['addregister']))
  {
    // Obtenemos los datos del formulario
    $user_tip = htmlspecialchars($_POST['tip']);
    $user_phone = htmlspecialchars(($_POST['oficialPhone']));
    $user_unit = htmlspecialchars(($_POST['unit']));
    $user_pass = htmlspecialchars(($_POST['pass']));

    //TODO Comprobar campos rellenados correctamente y HASH password

    $user = new User();
    $user->addNewUser($user_tip, $user_unit, $user_phone, $user_pass, $dbh);
    
    
    
  }


}