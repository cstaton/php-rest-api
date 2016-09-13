<?php

// namespace myApp\Model;

use Doctrine\ORM\Mapping AS ORM;

/**
* @ORM\Entity
* @ORM\Table(name="users");
**/

class User {

  /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue 
      @ORM\OneToMany(targetEntity="products",mappedBy="users")**/
  protected $id;
  
  /** @ORM\Column(type="string", name="name") **/
  protected $badName;

  /** @ORM\Column(type="string") **/
  protected $email;

  /** #ORM\OneToMany(targetEntity="Product", mappedBy="userId") **/
  protected $assignedProducts = null;

  /**
  *@ORM\return integer
  */
  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function getName() {
    return $this->name;
  }

  public function getArrayCopy(){
    return get_object_vars($this);
  }

  public function getUsers() {
    return $this->findAll();
  }

}