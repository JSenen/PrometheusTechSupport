<?php
function listTickets($tickets){
  

        foreach ($tickets as $ticket) {
          include('./view/view_alltickets.php');
        }
}
