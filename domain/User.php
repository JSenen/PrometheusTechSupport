<?php
class user
{

  public String $tip;
  public String $phone;
  public String $passwrd;
  public String $unit;
function __construct()
{
  
}
public function addNewUser($tip, $unit, $phone, $passwrd, $dbh){
  try {
    $passhash = password_hash($passwrd, PASSWORD_DEFAULT); //Ciframos contraseña
    $sql = "INSERT INTO users (user_name, user_password, user_phone, user_unit) VALUES (:user_name, :user_password, :user_phone, :user_unit )";
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':user_name', $tip, PDO::PARAM_STR);
            $stmt->bindParam(':user_password', $passhash, PDO::PARAM_STR);
            $stmt->bindParam(':user_phone', $phone, PDO::PARAM_STR);
            $stmt->bindParam(':user_unit', $unit, PDO::PARAM_STR);
            
            $stmt->execute();
            
            echo '<script>';
            echo 'alert("Registro exitoso. ¡Bienvenido!");';
            echo '</script>';

            $sec = 5; //Segundos aparece mensaje de login correcto
            header("Refresh: $sec; url=index.php"); //Despues de los segundos establecidos nos reinicia la página de Login  
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
}

}
}
?>