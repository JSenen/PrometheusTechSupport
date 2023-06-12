<?php
class Ticket 
{
public DateTime $datestart;
public DateTime $dateEnd;
public String $description = '';
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
 
  } catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
  }
}

public function getTickets($dbh, $state) {
  try {
    $sql = "SELECT * FROM ticket ORDER BY date_start DESC";
    $params = array();

    if ($state !== "all") {
      $sql = "SELECT * FROM ticket WHERE priority = :state ORDER BY date_start DESC";
      $params[':state'] = $state;
    }

    $stmt = $dbh->prepare($sql);
    $stmt->execute($params);
    $tickets = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if (!$tickets) {
      header('Location: indexTickets.php');
      exit();
    }
    
    return $tickets;
  } catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
  }
}


public function update($dbh, $priority, $id, $gatiId){
  try {

    $sql = "UPDATE ticket SET priority = :priority, technician_id = :gatiId WHERE id = :id";
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':priority', $priority, PDO::PARAM_STR);
            $stmt->bindParam(':gatiId', $gatiId, PDO::PARAM_STR);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                     
            $stmt->execute();
          
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
}
}

public function getDetailTicket($ticketId) {
  try {

    $conecction = new Conecction();
    $dbh = $conecction->getConection();
    
    $sql = "SELECT date_start, description, phone_unit, theme, user_id FROM ticket WHERE id = :ticket_id";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':ticket_id', $ticketId, PDO::PARAM_INT);
    $stmt->execute();
    $ticketDetail = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $ticketDetail;

  }catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
  }

}

}
?>

