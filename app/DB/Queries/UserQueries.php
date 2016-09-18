<?php
namespace cstaton\DB\Queries;

class UserQueries extends AbstractEntityQueries {

  public function findMeSomeUsers() {
    
    $users = $this->findAll();

    return $users;
  }

}