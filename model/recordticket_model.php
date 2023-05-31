<?php
include('./domain/Ticket.php');
include_once('./domain/Conecction.php');

function addTicket()
{
  if (isset($_POST['sendticket'])) {

    $connection = new Conecction();
    $dbh = $connection->getConection();

    // Obtenemos los datos del formulario
    $theme = htmlspecialchars($_POST['theme_computer']);
    $description = htmlspecialchars($_POST['description']);
    $label = htmlspecialchars($_POST['label_computer']);
    $ipcomputer = htmlspecialchars($_POST['ip_computer']);
    $date_start = date('Y-m-d');
    $userid = $_SESSION['user_id'];
    $userphone = $_SESSION['user_phone'];
    //TODO Terminar conexion y grabar a base en el domain    
    
    //Creamos un objeto ticket
      $ticket = new Ticket();
      try {
        $ticket->recordTicket($dbh, $theme, $description, $label, $ipcomputer, $userphone, $userid ,$date_start);

      } catch (Exception $e) {
        // Manejar la excepción aquí
        echo 'Ha ocurrido un error: ' . $e->getMessage();
      }

    }
}

?>