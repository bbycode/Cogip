<?php
/**
 * Facture class
 */
class Facture
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
