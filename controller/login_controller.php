<?php
require_once('./domain/Conecction.php'); 
function startPage()
{ 

  require('./view/view_login.php');
  getLogin();

}

function registerUser()
{ 
  addNewUser();
}
?>