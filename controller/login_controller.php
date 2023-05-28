<?php
require_once('./domain/Conecction.php');
function startPage()
{
  $connection = new Conecction();
  $connection->getConection();
  require('./view/view_login.php');

}
?>