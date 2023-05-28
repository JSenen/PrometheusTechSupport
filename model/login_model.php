<?php

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