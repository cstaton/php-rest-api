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

  /** @Column(type="datetime", name="date_created") * */
  protected $dateCreated;

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

  public function getEmail() {
    return $this->email;
  }

  public function getDateCreated() {
    return $this->dateCreated;
  }

  public function getArrayCopy(){
    return get_object_vars($this);
  }

}