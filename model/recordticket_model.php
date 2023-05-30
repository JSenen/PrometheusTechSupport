<?php
include('./domain/Ticket.php');
include_once('./domain/Connecction.php');

function addTicket()
{
  if (isset($_POST['addcategory'])) {
    // Obtenemos los datos del formulario, asegur�ndonos que son v�lidos.
    $theme = htmlspecialchars($_POST['theme_computer']);
    $description = htmlspecialchars($_POST['description']);
    $label = htmlspecialchars($_POST['label_computer']);
    $ipcomputer = htmlspecialchars($_POST['ip_computer']);
    //TODO Terminar conexion y grabar a base en el domain    
    
    //Creamos un objeto ticket
      $ticket = new Ticket();
      try {
        $ticket->recordTicket();
        /*header('Location: ./indexCategory.php');*/
      } catch (Exception $e) {
        // Manejar la excepción aquí
        echo 'Ha ocurrido un error: ' . $e->getMessage();
      }

    }
}

?>