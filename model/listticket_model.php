<?php
include_once('./domain/Ticket.php');
function listTickets($tickets){
  
include('./view/view_alltickets.php');
?>
<div class="container">

    <table class="table table-striped-custom table-fixed">
      <thead>
        <tr>
        <th style="width: 9%" >Fecha</th>
        <th style="width: 18%">Asunto</th>
        <th style="width: 20%">Descripción</th>
        <th style="width: 7%">Usuario</th>
        <th style="width: 13%">Unidad</th>
        <th style="width: 7%">Teléfono</th>
        <th style="width: 10%">Estado</th>
        <th style="width: 8%">Resuelve</th>
        <th style="width: 11%">Fecha Fin</th>
        
        </tr>
      </thead> 
<?php
        foreach ($tickets as $ticket) {
          $_SESSION['ticket_id'] = $ticket['id']; 
          include('./view/listTickets.php');
        }
?>
</table>
  </div>
<?php
}
