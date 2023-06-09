<?php
include_once('./domain/Ticket.php');
include_once('./domain/Conecction.php');
function ticketsList($state){
  $connection = new Conecction();
  $dbh = $connection->getConection();
  $ticket = new Ticket();
  $tickets = $ticket->getTickets($dbh,$state);
  include('./model/listticket_model.php');
  listTickets($tickets);

}

function updateTicket($id,$action,$gatiId){
  include('./model/linkaction_model.php');
  changePriotityTicket($id,$action,$gatiId);
  // Recargar la página utilizando JavaScript
  header('Location: indexTickets.php');
}

function ticketDetail($ticketId){
  $ticket = new Ticket();
  $ticket->getDetailTicket($ticketId);
  include('./model/detailticket_model.php');
  showTicketDetail($ticket);

}