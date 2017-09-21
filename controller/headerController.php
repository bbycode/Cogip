<?php
/**
 *class header
 */
class headerController
{
  private $_currentPage;
  function __construct()
  {
  }
  public function currentPage()
  {
    if (isset($_GET['page'])) {
      $this->_currentPage = $_GET['page'];
    } else {
      $this->_currentPage = 'acceuil';
    }
    return $this->_currentPage;
  }
  public function load()
  {
    require_once(VIEW. 'header.php');
  }
}
 ?>
