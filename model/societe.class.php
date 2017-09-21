<?php
/**
 * Societe Class
 */
class societe
{

  function __construct()
  {
    # code...
  }
  public function load(){
    require_once(VIEW. get_class($this). '.php');
  }
}
 ?>
