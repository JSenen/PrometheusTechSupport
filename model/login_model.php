<?php

include_once('./domain/User.php');
function getLogin()
{
  $connection = new Conecction();
  $dbh = $connection->getConection();

  if(isset($_POST['username'], $_POST['password']))
  {
    $name = $_POST['username'];
    $passwrd = $_POST['password'];

    $stmt = $dbh->prepare("SELECT * FROM users WHERE user_name = :username");
    $stmt->bindParam(":username", $name, PDO::PARAM_STR);
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
           $_SESSION['user_id'] = $user['id'];
           $_SESSION['user_name'] = $user['user_name']; 
           $_SESSION['user_unit'] = $user['user_unit']; 
           $_SESSION['role'] = $user['role'];
           $_SESSION['user_phone'] = $user['user_phone']; 
          
           session_start();
           setcookie('prometheus', '', 86400); //Establecemos una cokkie de 1 dia
           header('location:indexGati.php'); //Enviamos a la página para usuarios registrados
           exit();

        }
         
        }


    } else {
      $_SESSION['login_error'] = "LOGIN FALLIDO"; // Almacena el mensaje de error en una variable de sesión
      session_write_close(); // Borramos sesiones anteriores
      header("Refresh: 10; url=index.php");
    }
  }
}
  /* TODO COMPROBAR CONDICIONALES */

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