<?php
require_once('./domain/Conecction.php'); 
function firstPage()
{ 
  require('./view/view_gati.php');

}
function recordTicket() {
  require('./view/view_gati.php');
  require('./model/recordticket_model.php');
  addTicket();
}

?>