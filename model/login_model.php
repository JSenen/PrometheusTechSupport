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

    if($row > 0)
    {
      foreach ($resultado as $user) 
      {
        
      }
    }
  }
}

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

    //TODO Comprobar campos rellenados correctamente

    $user = new User();
    $user->addNewUser($user_tip, $user_unit, $user_phone, $user_pass, $dbh);
    
    
    
  }


}