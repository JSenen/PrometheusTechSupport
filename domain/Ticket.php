<?php
class Ticket 
{
public DateTime $dateStart;
public DateTime $dateEnd;
public String $description;
public String $phoneNumber;
public String $theme;
public int $userid;

function __construct(){

}
function recordTicket($dbh, $theme, $description, $label, $ipcomputer, $userphone, $userid ,$date_start)
{
  try {
    $sql = "INSERT INTO ticket (description, phone_unit, theme, user_id) VALUES ( :description, :phone_unit, :theme, :user_id)";
    $stmt = $dbh->prepare($sql);
    
    $stmt->bindParam(':description', $description, PDO::PARAM_STR);
    $stmt->bindParam(':phone_unit', $userphone, PDO::PARAM_STR);
    $stmt->bindParam(':theme', $theme, PDO::PARAM_STR);
    $stmt->bindParam(':user_id', $userid, PDO::PARAM_INT);
    $stmt->execute();

    echo '<script>';
    echo 'alert("TICKET ENVIADO");';
    echo '</script>';

    $sec = 5; 
    header("Refresh: $sec; url=index.php"); 

  } catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
  }
}


}
?>