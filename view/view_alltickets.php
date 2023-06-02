<?php
include('header.php');
include_once('./model/listticket_model.php');
require_once('./domain/User.php');
require_once('./domain/Ticket.php');
$dateToday = date('Y-m-d');
?>
<style>
  .nav-tip {
    color: #F7D060; /* Cambia esto por el color que desees */
}
</style>
<script>
  $(document).ready(function() {
    $('.dropdown-toggle').dropdown();
  });
</script>
<nav class="navbar-dark bg-dark navbar-vertical show">
  <ul class="navbar-nav">
  <img src="./resources/img/parche-GAT2.png"  alt="" class="footer-img">
    <li class="nav-item">
        <a class="nav-tip" href="index.php"><?php echo $_SESSION['user_name'] ?></a>
      </li>
    <?php if($_SESSION['role'] === 'admin') { ?> 
    <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Tickets Soporte
          <span class="sr-only">(current)</span></a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="indexTickets.php">Todos</a>
          <a class="dropdown-item" href="#">Pendientes</a>
          <a class="dropdown-item" href="#">En proceso</a>
          <a class="dropdown-item" href="#">Cerradas</a>
          <!-- divisor
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Cerradas</a> -->
        </div> 
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Equipos
          <span class="sr-only">(current)</span></a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Altas</a>
          <a class="dropdown-item" href="#">Asociar</a>
          <a class="dropdown-item" href="#">Pretamos</a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">SSD</a>
          <a class="dropdown-item" href="#">RAM</a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Traslados</a>
          <a class="dropdown-item" href="#">Renovaciones</a> 
        </div> 
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Consultas
          <span class="sr-only">(current)</span></a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Equipos</a>
          <a class="dropdown-item" href="#">Unidades</a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Guia telefonos</a>
        </div> 
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Telefonia</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sirdee</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Estadisticas</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="#">Usuarios</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="#">Guia Telefonos</a>
      </li> 
    </ul>
  <?php
  } ?>     
</nav>

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

<div class="container">
  <?php $_SESSION['ticket_id'] = $ticket['id']; ?>
    <table class="table table-striped-custom table-fixed">
      <thead>
        <tr>
          <th style="width: 7.5%" >Fecha </th>
          <th style="width: 14%">Asunto</th>
          <th style="width: 18.66%">Descripción</th>
          <th style="width: 6.66%">Usuario</th>
          <th style="width: 13.66%">Unidad</th>
          <th style="width: 6.66%">Telefono</th>
          <th styke="width: 16.66%">Estado</th>
          <th style="width: 12.66%">GATI Resuelve</th>
          <th style="width: 10.66%">Fecha Fin</th>
        </tr>
      </thead>
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
          if($ticket['priority'] == 'active'){?>
            <td style="font-size: 14px"><a href="indexUpdateTicket.php?id=<?= $ticket['id']; ?>&state=<?= 'resolver' ?>"  class="btn btn-danger">Resolver</a></td>
          <?php
          }elseif($ticket['priority'] == 'fixing') { ?>
            <td style="font-size: 14px"><a href="indexUpdateTicket.php?id=<?= $ticket['id']; ?>&state=<?= 'resuelto' ?>"class="btn btn-warning">En Proceso</a></td>
          <?php
          }elseif($ticket['priority'] == 'fixed') { ?>
            <td style="font-size: 14px"><a href="#" class="btn btn-success">Solucionado</a></td>
          <?php
          }  
          if($ticket['priority'] == 'fixing') { 
            echo '<td style="font-size: 14px">' . $_SESSION['user_name'] . '</td>';        
          }elseif ($ticket['priority'] == 'fixed') {
            echo '<td style="font-size: 14px">'. $_SESSION['user_name'].'</td>';
            echo '<td style="font-size: 14px">'. $dateToday.'</td>';            
          }    
          ?>

        </tr>
      </tbody>
    </table>
  </div>
<?php
include('footer.php');
?>
