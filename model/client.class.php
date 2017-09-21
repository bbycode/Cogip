<?php
/**
 * client class
 */
class client
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
