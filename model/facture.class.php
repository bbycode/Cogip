<?php
/**
 * Facture class
 */
class facture
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
