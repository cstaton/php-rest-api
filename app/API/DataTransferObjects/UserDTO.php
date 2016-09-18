<?php
namespace cstaton\API\DataTransferObjects;

use Plastiq\Models\User;

class UserDTO extends AbstractDTO
{
  protected $id;
  protected $name;
  protected $email;

  public function __construct($user)
  {
    $this->id = $user->getId();
    $this->name = $user->getName();
    $this->email = $user->getEmail();
    $this->dateCreated = $user->getDateCreated();
  }
}