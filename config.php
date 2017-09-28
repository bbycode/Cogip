<?php
//USEFUL CONSTANTS
define('VIEW','view/');
define('MODEL','model/');
define('CONTROLLER','controller/');
define('ASSET','view/Assets/');
define('SCRIPT','view/Assets/js/');
define('STYLE','view/Assets/css/');
define('IMG','view/Assets/img');
//display a tag
function tagDisplay($obj)
{
  echo $obj->_htmltag;
  echo $obj->_tagcontent;
  echo $obj->closeTag();
}

//loads automatically the required class
function loadClass($class)
{
  require_once(MODEL .$class. '.class.php' );
}
  spl_autoload_register('loadClass');
?>
