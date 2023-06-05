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
<script>
  $(document).ready(function() {
    $('.dropdown-toggle').dropdown();
  });
</script>
      <tbody>
        <tr>
          <td style="font-size: 14px"><?php echo $ticket['date_start']; ?></td>
          <td style="font-size: 14px"><?php echo $ticket['theme']; ?></td>
          <td style="font-size: 14px"><?php echo $ticket['description']; ?></td>
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
            echo '<td style="font-size: 14px">'. $dateToday.'</td>';            
          }    
          ?>

        </tr>
      </tbody>
    