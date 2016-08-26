<?php

use Doctrine\ORM\Mapping AS ORM;

/**
*@ORM\Entity 
*@ORM\Table(name="products")
**/
class Product {
  /**
  *@ORM\Id
  *@ORM\Column(type="integer")
  *@ORM\GeneratedValue(strategy="AUTO")
  */
  protected $id;

  /**
  *@ORM\Column(type="string", length=64)
  */
  protected $name;

  /**
  *@ORM\return integer
  */
  public function getId() {
    return $this->id;
  }

  /**
  *@ORM\return string
  */
  public function getName() {
    return $this->name;
  }

  public function getArrayCopy() {
    return get_object_vars($this);
  }


  // public function setName($name) {
  //   $this->name = $name;
  // }
  
}