<?php

$state = $_GET['state'] ?? "all";

define('CONTROLLER_FOLDER', "controller/"); //Directorio donde definimos los controladores
define('DEFAULT_CONTROLLER', "start"); //Controlador por defecto
define('DEFAULT_ACTION', "firstPage"); //Accion por defecto

//Obtener controlador y accion, si no por defecto

if (isset($_GET['controller'])) {  
  $controller = $_GET['controller'];
}else {
  $controller = DEFAULT_CONTROLLER;
}

if (isset($_GET['action'])) {
  $action = $_GET['action'];
}else{
  $action = DEFAULT_ACTION;
}


//Formacion del fichero que contiene el controlador
$controller = CONTROLLER_FOLDER . $controller . '_controller.php';
//Si la variable controller es un fichero, lo requerimos

if (is_file($controller))
  require_once($controller);
else
  die("El controlador no existe 404 Not found");

//Si action es una función, ejecutamos el script
if (is_callable($action))
  $action($state);
else
  die("La accion requerida no existe 404 not found");
?>
