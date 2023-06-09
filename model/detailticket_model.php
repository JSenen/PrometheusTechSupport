<?php
require_once('./domain/Ticket.php');
include('./view/header.php');
  function showTicketDetail($ticket){

    $detailTicket = $ticket->description;
    echo '<div><p>'.$detailTicket.'</p></div>';

    include('./view/view_alltickets.php'); ?>

    <!-- Modal -->
<style>
  .modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.4);
  text-align: justify;
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 30px;
  border: 1px solid #888;
  width: 80%;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>
<!-- Ventana modal -->
<div id="myModal" class="modal">
    <!-- Contenido de la ventana modal -->
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2><?php echo $detailTicket ?></h2>
        <p>Con esta apliación, el GATI pretende agilizar la gestión de incidencias</p>
        <p>Tras cerrar esta ventana, se recuerda que es necesario rellenar los siguientes campos <mark class="text-danger">obligatorios</mark> como mínimo:</p>
        <ul>
          <li class="text-danger">ASUNTO</li>
          <li class="text-danger">DESCRIPCION -> Breve resumén de la incidencia ocurrida</li>
        </ul>
        <p>
        <p>¡Gracias por su colaboración!, será atendido a la mayor brevedad posible</p>

    </div>
</div>

    <script>
      // Función para abrir la ventana modal
      function openModal() {
          document.getElementById("myModal").style.display = "block";
      }

      // Función para cerrar la ventana modal
      function closeModal() {
          document.getElementById("myModal").style.display = "none";
      }

      // Abrir la ventana modal al cargar la página
      window.onload = function() {
          openModal();
      };
    </script>
    <?php
    
  }
?>