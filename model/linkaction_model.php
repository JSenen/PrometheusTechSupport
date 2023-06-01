<?php
require_once('./domain/Conecction.php');
require_once('./domain/Ticket.php');

function changePriotityTicket($id, $accion){
  $connection = new Conecction();
  $dbh = $connection->getConection();
  
  $ticket = new Ticket();
  
  // Ejecutar la acción deseada
  if ($accion == 'resolver') {
    $ticket->update($dbh,'fixing', $id);
    header('indexTickets.php');
  }
  if ($accion == 'resuelto') {
    $ticket->update($dbh,'fixed', $id);
    header('indexTickets.php');
  }
  
}

?>