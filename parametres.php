<?php
//USEFUL CONSTANTS
define('VIEW','view/');
define('MODEL','model/');
define('CONTROLLER','controller/');
define('ASSET','view/assets/');
define('SCRIPT','view/assets/js/');
define('STYLE','view/assets/css/');
define('IMG','view/assets/img');
//Load automatically the suitable class
function loadClass($class){
  require_once(CONTROLLER .$class.'.php');
}
spl_autoload_register('loadClass');
 ?>
