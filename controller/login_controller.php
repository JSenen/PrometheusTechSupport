<?php
require_once('./domain/Conecction.php'); 
function startPage()
{
  require('./view/view_login.php');
  include_once('./model/login_model');
  getLogin();

}

function registerUser()
{
  require('./model/login_model');
  addNewUser();

}
?>