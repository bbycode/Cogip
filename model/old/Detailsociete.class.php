<?php
/**
 * societe class
 */
class Detailsociete extends Societe
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
