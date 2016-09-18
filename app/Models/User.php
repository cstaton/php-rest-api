<?php
namespace cstaton\Models;

/**
* @Entity(repositoryClass="cstaton\DB\Queries\UserQueries")
* @Table(name="users");
**/

class User extends AbstractEntityModel {

  /** @Id @Column(type="integer") @GeneratedValue **/
  protected $id;
  
  /** @Column(type="string", name="name") **/
  protected $name;

  /** @Column(type="string") **/
  protected $email;

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