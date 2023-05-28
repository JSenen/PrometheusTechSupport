<?php
function startPage()
{
  require('./view/view_login.php');
  require('./model/login_model');
  getLogin();

}
?>