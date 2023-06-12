<?php
include('header.php');
include_once('./model/listticket_model.php');
require_once('./domain/User.php');
require_once('./domain/Ticket.php');
$dateToday = date('Y-m-d');
?>
<!-- LISTADO DE TICKETS -->

<style>
  .table-striped-custom tbody tr:nth-of-type(odd) {
    background-color: #DAEAF1; /* Color de fondo para filas impares */
  }
  
  .table-striped-custom tbody tr:nth-of-type(even) {
    background-color: #ffffff; /* Color de fondo para filas pares */
  }
  .table-fixed {
    table-layout: fixed;
  }
</style>


      
      
  
 