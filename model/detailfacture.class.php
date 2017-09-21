<?php
/**
 * detail facture
 */
class detailfacture extends facture
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
