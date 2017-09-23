<?php
/**
 *
 */
class Header
{
  private $_beginHeader = '<div class=';
  private $_endHeader = '</div>';
  function __construct(argument)
  {
    # code...
  }
  public function create($class)
  {
    return $this->_beginHeader. $class. '>';
  }
  public function end()
  {
    return $this->_endHeader;
  }
  public function title($title)
  {
    $this->_title = $title;
    return $this->_title;
  }
}


 ?>
