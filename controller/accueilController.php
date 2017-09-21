<?php
/**
 *
 */
class contentController
{

  function __construct()
  {
    # code...
  }
  public function load($param)
  {
    if(isset($_GET[$param])){
      require_once(VIEW. $param. '.php');
    }
    else{
      require_once(VIEW. 'accueil.php');
    }
  }
}
 ?>
