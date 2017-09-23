<?php
/**
 * Classe balise
 */
class Balise
{
  private $_leftChevron='<';
  private $_rightChevron ='>';
  private $_space=" ";
  private $_slash='/';
  private $_balise;
  private $_propName;
  private $_prop;


  function __construct($balise)
  {
    $this->_balise = $balise;
  }
  public function space()
  {
    return $this->_space;
  }
  public function startBalise($balise)
  {
    return $this->_leftChevron. $balise.$this->space();
  }
  public function baliseClose()
  {
    return $this->_rightChevron;
  }
  public function baliseProp($name,$prop)
  {
    $this->_propName = $name;
    $this->_prop = $prop;
    return $this->_propName."=". $this->_prop;
  }
  public function endBalise($balise)
  {
    return $this->_leftChevron. $this->_slash . $balise . $this->baliseClose();
  }
}
$ulist = new Balise("ul");
$item = new Balise("li");
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test</title>
  </head>
  <body>
    <?php
      echo $ulist->startBalise("ul").$ulist->baliseClose();
      echo $item->startBalise("li").$item->baliseClose();
      echo "<p>toto</p>";
      echo $item->endBalise("li");

      echo $ulist->endBalise("ul");
     ?>
  </body>
</html>
