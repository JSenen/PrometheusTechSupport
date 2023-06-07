<?php
class user
{

  public String $tip;
  public String $phone;
  public String $passwrd;
  public String $unit;
  public int $id;
function __construct()
{
  
}
function getAllUserData(){
  $userData = array (
  'user_tip' => $this->tip,
  'user_phone' => $this->phone,
  'user_unit' => $this->unit
  );
  return $userData;
}
public function addNewUser($tip, $unit, $phone, $mail, $passwrd, $dbh){
  try {
    $passhash = password_hash($passwrd, PASSWORD_DEFAULT); //Ciframos contraseña
    $sql = "INSERT INTO users (user_name, user_password, user_phone, user_unit, user_mail) VALUES (:user_name, :user_password, :user_phone, :user_unit, :user_mail )";
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':user_name', $tip, PDO::PARAM_STR);
            $stmt->bindParam(':user_password', $passhash, PDO::PARAM_STR);
            $stmt->bindParam(':user_phone', $phone, PDO::PARAM_STR);
            $stmt->bindParam(':user_unit', $unit, PDO::PARAM_STR);
            $stmt->bindParam(':user_mail',$mail,PDO::PARAM_STR);
            
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

public function getUserofTicket($user_id){
  $userdata = array(); // Inicializar la variable $userdata como un array vacío
  try{
    $connection = new Conecction();
    $dbh = $connection->getConection();
    $stmt = $dbh->prepare("SELECT user_name, user_phone, user_unit FROM users WHERE id = :user_id");
    $stmt->bindParam(':user_id',$user_id,PDO::PARAM_INT);
    $stmt->execute();
    $userdata = $stmt->fetchAll();

  }catch (PDOException $exc){
    echo "ERROR" . $exc->getMessage();
  }
  return $userdata;
}
}
?>