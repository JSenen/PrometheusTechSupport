<?php
include('header.php');
include_once('./model/listticket_model.php');
require_once('./domain/User.php');
?>

<nav class="navbar-dark bg-dark navbar-vertical show">
  <ul class="navbar-nav">
  <img src="./resources/img/parche-GAT2.png"  alt="" class="footer-img">
    <li class="nav-item">
        <a class="nav-link" href="index.php">Inicio</a>
      </li>
    <?php if($_SESSION['role'] == 'admin') { ?>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Tickets Soporte
          <span class="sr-only">(current)</span></a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Todos</a>
          <a class="dropdown-item" href="#">Abiertas</a>
          <a class="dropdown-item" href="#">Cerradas</a>
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
        <a class="nav-link" href="#">Usuarios</a>
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
          <th style="width: 10.66%" >Fecha </th>
          <th style="width: 13.66%">Asunto</th>
          <th style="width: 13.66%">Descripción</th>
          <th style="width: 10.66%">Usuario</th>
          <th style="width: 13.66%">Unidad</th>
          <th style="width: 10.66%">Telefono</th>
          <th styke="width: 8.66%">Estado</th>
          <th style="width: 8.66%">GATI Resuelve</th>
          <th style="width: 10.66%">Fecha Fin</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $ticket['date_start']; ?></td>
          <td><?php echo $ticket['theme']; ?></td>
          <td><?php echo $ticket['description']; ?></td>
          <?php
            $user = new User();
            $userData = $user->getUserofTicket($ticket['user_id']);
            foreach ($userData as $user) {
              echo '<td>' . $user['user_name'] . '</td>';
              echo '<td>' . $user['user_unit'] . '</td>';
              echo '<td>' . $user['user_phone'] . '</td>';              
            }
          if($ticket['priority'] == 'active'){?>
            <td><a href="#" id="resolver-link" class="btn btn-danger">Resolver</a></td>
          <?php
          }elseif($ticket['priority'] == 'fixing') { ?>
            <td><a href="#" id="resuelto-link" class="btn btn-warning">En Proceso</a></td>
          <?php
          }elseif($ticket['priority'] == 'fixed') { ?>
            <td><a href="#" class="btn btn-success">Solucionado</a></td>
          <?php
          }        
          ?>

        </tr>
      </tbody>
    </table>
  </div>
  <script src="./resources/js/linkaction.js"></script>
<?php
include('footer.php');
?>
