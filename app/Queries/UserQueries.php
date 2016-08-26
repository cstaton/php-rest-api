<?php
namespace myApp\Queries;

use Doctrine\ORM\EntityRepository;

class UserQueries extends EntityRepository {

  public function findMeSomeUsers() {
    
    $users = $this->findAll();

    return $users;
  }

}