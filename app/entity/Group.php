<?php

use Doctrine\ORM\Mapping AS ORM;

/**
*@ORM\Entity 
*@ORM\Table(name="groups")
**/
class Group {
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
  *@ORM\Column(type="text")
  */
  protected $permissions;

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

  
}


