<?php
include_once('./domain/Ticket.php');
function listTickets($tickets){
include('./view/view_alltickets.php');

?>

<div class="container">

    <table class="table table-striped-custom table-fixed" id="tableListTickets">
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
          include('./view/view_ticketsContainer.php');
        }
?>
</table>
  </div>
  <div class="container">
<button type="button" class="btn btn-outline-info" onclick="location.reload()">Actualizar</button>
</div>
  <script>
    $(document).ready(function() {
      $('#tableListTickets').DataTable({
        searching: false,
        ordering: false,
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "Sin resultados - lo lamento",
            "info": "Mostrando _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtrando _MAX_ registros totales)",
            "paginate": {
              "next": "Siguiente",
              "previous": "Anterior"
            }
            
        }

      });
    });
  </script>
  
<?php
}
