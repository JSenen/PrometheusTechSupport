<?php
function listTickets($tickets){

  
        //Si no se ha iniciado session o solo es usuario normal.
        //Mostrará solo llos temas sin opción de editar o borrar
        foreach ($tickets as $ticket) {
          include('./view/view_alltickets.php');
        }

        

}