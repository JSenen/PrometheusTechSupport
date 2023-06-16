<?php

function getNewPassword(){
  require('./view/view_recoverPasswordInstructions.php');
}

function sendMailtoUser(){
  require('sendmail_model.php');
}