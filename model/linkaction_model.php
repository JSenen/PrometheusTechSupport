<?php
require_once('./domain/Conecction.php');
require_once('./domain/Ticket.php');

$connection = new Conecction();
$dbh = $connection->getConection();

$ticket = new Ticket();

// Obtener el valor del parámetro "accion"
$accion = $_POST['accion'];

// Ejecutar la acción deseada
if ($accion == 'resolver') {
  $id = $_SESSION['ticket_id'];
  $ticket->update($dbh,'fixing', $id);
  include('listticket_model.php');
}
if ($accion == 'resuelto') {
  //Realizar la accio resuelto
  // ...
}

?>