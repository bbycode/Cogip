<?php
/**
 *class header
 */
class HeaderController
{
  private $_currentPage;
  private $_chevdisplay;

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
  public function chevdisplay()
  {
    if (isset($_GET['page']))
    {
      switch ($this->_currentPage)
      {
        case 'accueil':
          $this->_chevdisplay="chevdisplay";
          break;
        default:
        $this->_chevdisplay="chevhide";
          break;
      }
    }
    return $this->_chevdisplay;
  }
}
 ?>
