<?php
include_once('./domain/Ticket.php');
include('./view/header.php');
function listTickets($tickets){
include('./view/view_alltickets.php');

?>
<!-- JQuey DataTables -->
<script src="./resources/js/jquery-3.7.0.min.js"></script>
<script src="./resources/DataTables/DataTables-1.13.4/js/jquery.dataTables.min.js" ></script>


<div class="container">

    <table class="table table-striped table-fixed" id="tableListTickets">
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
      <tbody>
     
<?php
        foreach ($tickets as $ticket) {
          $_SESSION['ticket_id'] = $ticket['id']; 
           ?>
     
          <tr>
          <td style="font-size: 14px"><?php echo date('d-m-Y', strtotime($ticket['date_start'])); ?></td>
          <td style="font-size: 14px"><?php echo $ticket['theme']; ?></td>
          <td style="font-size: 14px">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#ticketDetails<?php echo $ticket['id']; ?>" aria-expanded="false" aria-controls="ticketDetails<?php echo $ticket['id']; ?>">
                                Ver detalle
                            </button>
                            <div class="collapse" id="ticketDetails<?php echo $ticket['id']; ?>">
                                <?php echo $ticket['description']; ?>
                            </div>
                        </td>
          <?php
            $user = new User();
            $userData = $user->getUserofTicket($ticket['user_id']);
            foreach ($userData as $user) {
              echo '<td style="font-size: 14px">' . $user['user_name'] . '</td>';
              echo '<td style="font-size: 14px">' . $user['user_unit'] . '</td>';
              echo '<td style="font-size: 14px">' . $user['user_phone'] . '</td>';          
            }
          $gatiId = $_SESSION['user_name'];
          if($ticket['priority'] == 'active'){?>
            <td style="font-size: 14px">
              <a href="indexUpdateTicket.php?id=<?= $ticket['id']; ?>&state=<?= 'resolver' ?>&gatiId=<?= $gatiId ?>"  class="btn btn-danger">Resolver</a>
            </td>
            <td>---</td>
            <td>---</td>
          <?php
          }elseif($ticket['priority'] == 'fixing') { ?>
            <td style="font-size: 14px"><a href="indexUpdateTicket.php?id=<?= $ticket['id']; ?>&state=<?= 'resuelto' ?>&gatiId=<?= $gatiId ?>"class="btn btn-warning">En Proceso</a></td>
          <?php
          }elseif($ticket['priority'] == 'fixed') { ?>
            <td style="font-size: 14px"><a href="#" class="btn btn-success">Solucionado</a></td>
          <?php
          }  
          if($ticket['priority'] == 'fixing') { 
            echo '<td style="font-size: 14px">' . $ticket['technician_id'] . '</td>';     
            echo '<td style="font-size: 14px">---</td>';      
          }elseif ($ticket['priority'] == 'fixed') {
            echo '<td style="font-size: 14px">'. $ticket['technician_id'].'</td>';
            echo '<td style="font-size: 14px">'. date('d-m-Y', strtotime($dateToday)).'</td>';            
          }    
          ?>

        </tr>
       
        <?php
        }
?>
 </tbody>
 </table>
  </div>
  <script>
    $(document).ready(function() {
      $('#tableListTickets').DataTable({
        
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "Sin resultados - lo lamento",
            "info": "Mostrando _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtrando _MAX_ registros totales)",
            "paginate": {
              "next": "Siguiente",
              "previous": "Anterior"
            },
            "search": "Buscar"             
        }

      });
    });
  </script>

  <div class="container">
<button type="button" class="btn btn-outline-info" onclick="location.reload()">Actualizar</button>
</div>

<?php
}

