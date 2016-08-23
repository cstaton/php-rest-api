<?php

use Doctrine\ORM\Mapping AS ORM;

/**
*@ORM\Entity 
*@ORM\Table(name="users")
**/
class User {
  /**
  *@ORM\Id
  *@ORM\Column(type="integer")
  *@ORM\GeneratedValue(strategy="AUTO")
  */
  protected $id;

  /**
  *@ORM\Column(type="string", length=64)
  */
  protected $username;

  /**
  *@ORM\Column(type="string", length=64)
  */
  protected $password;

  /**
  *@ORM\Column(type="string", length=64)
  */
  protected $salt;

  /**
  *@ORM\Column(type="string", length=64)
  */
  protected $name;

  /**
  *@ORM\Column(type="datetime")
  */
  protected $date_joined;

  /**
  *@ORM\Column(type="integer")
  */
  protected $group;

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


