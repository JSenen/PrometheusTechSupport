<?php
include('header.php');
include_once('./model/listticket_model.php');
require_once('./domain/User.php');
require_once('./domain/Ticket.php');
$dateToday = date('Y-m-d');
session_start();
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
  <img src="./resources/img/parche-GAT2.png"  alt="" width="100" height="100">
    <li class="nav-item">
        <a class="nav-tip" href="index.php"><?php echo $_SESSION['user_name'] ?></a>
    </li>
    <?php if($_SESSION['role'] === 'admin') { ?> 
    <li class="nav-item">
        <a class="nav-link active" href="indexTickets.php?controller=tickets&action=ticketsList">
          Tickets Soporte
    </li> 
    <li class="nav-item">
       <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.location.href = '../gatiwp/index.php';">Web</button>
    </li>
    </ul>
  <?php
  } ?>     
</nav>
<?php
include('footer.php');
?>
