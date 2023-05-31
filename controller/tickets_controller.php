<?php
include_once('./domain/Ticket.php');
include_once('./domain/Conecction.php');
function ticketsList(){
  $connection = new Conecction();
  $dbh = $connection->getConection();
  $ticket = new Ticket();
  $tickets = $ticket->getTickets($dbh);
  include('./model/listticket_model.php');
  listTickets($tickets);

}