<?php
/**
 * Tag Class for html tags.
 */
class Tag
{
  private $_class;/**< tag's class*/
  private $_id;/**< tag's id */
  private $_name; /**<The property name*/
  private $_value;/**<The property value*/
  private $_tag;/**< the tag*/
  private $_tagcontent;
  private $_htmltag;/**<The html tag*/

  //Accesseur et Mutateur
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
  public function closeTag()
  {
    return "</".$this->_tag.">";
  }

  /**
  *The contructor.
  */
  function __construct($tag, $class="", $id="", $name="", $value="",$tagcontent="")
  {
    $this->_htmltag = "<";
    $this->_tag = $tag;
    $this->_htmltag .=$this->_tag;
    $this->_class = $class;
    //Avoid adding empty class
    if ($this->_class!="")
     {
    $this->_htmltag .=" class=".'"'.$this->_class.'"';
    }
    $this->_id = $id;
    //avoir adding empty id
    if ($this->_id!="")
    {
    $this->_htmltag .=" id=".'"'.$this->_id.'"';
    }
    $this->_name = $name;
    $this->_value = $value;
    //Avoid adding empty property
    if (($this->_name!="")&&($this->_value!=""))
    {
    $this->_htmltag .=" ".$this->_name .'="'.$this->_value.'"';
    }
    $this->_htmltag .=">";
    /**
    *Checking for empty tag content
    *if there is no content the tag dont need to be closed
    */
    if ($this->_tagcontent!="")
    {
        $this->_htmltag .=$this->_tagcontent;
    }
        return $this->_htmltag;
  }
}
?>
