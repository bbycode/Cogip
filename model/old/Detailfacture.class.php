<?php
/**
 * detail facture
 */
class Detailfacture extends facture
{

  function __construct()
  {
    # code...
  }
  public function load()
  {
    require_once(VIEW. get_class($this). '.php');
  }
}
 ?>
