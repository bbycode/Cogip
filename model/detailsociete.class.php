<?php
/**
 * societe class
 */
class ClassName extends AnotherClass
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
