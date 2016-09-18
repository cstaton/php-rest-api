<?php
namespace cstaton\API\DataTransferObjects;

use Plastiq\Models\User;

class CustomerLinkDTO extends AbstractDTO
{
  protected $id;
  protected $name;
  protected $email;

  public function __construct(User $user)
  {
    $this->id = $user->getId();
    $this->name = $user->getName();
    $this->email = $user->getEmail();
  }
}