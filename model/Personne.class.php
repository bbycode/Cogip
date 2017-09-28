<?php
/**
 *
 */
class Personne
{
  private $_id;
  private $_nom;
  private $_prenom;
  private $_email;
  private $_tel;
  private $_updatetime;

  public function __get($property)
  {
    if(property_exists($this, $property))
    {
      return $this->$property;
    }
  }
  public function __set($property, $value)
  {
    if(property_exists($this, $property))
    {
      $this->$property = $value;
    }
  }

  function __construct(argument)
  {
    # code...
  }
}
 ?>
