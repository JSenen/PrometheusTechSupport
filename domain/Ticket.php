<?php
class Ticket 
{
public DateTime $datestart;
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
    $sql = "INSERT INTO ticket (description, phone_unit, theme, user_id, date_start) VALUES ( :description, :phone_unit, :theme, :user_id, :date_start)";
    $stmt = $dbh->prepare($sql);
    
    $stmt->bindParam(':description', $description, PDO::PARAM_STR);
    $stmt->bindParam(':phone_unit', $userphone, PDO::PARAM_STR);
    $stmt->bindParam(':theme', $theme, PDO::PARAM_STR);
    $stmt->bindParam(':user_id', $userid, PDO::PARAM_INT);
    $stmt->bindParam(':date_start', $date_start, PDO::PARAM_STR);
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

public function getTickets($dbh){
  try{
  
    $stmt = $dbh->prepare("SELECT * FROM ticket");
    $stmt->execute();
    $tickets = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (!$tickets) {                                     // Si no existe 
      header('indexGati.php'); 
    }
    return $tickets;
  } catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
  
}

}


}
?>