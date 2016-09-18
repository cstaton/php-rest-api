<?php
namespace cstaton\API\Controllers;

use cstaton\Models\User;
use cstaton\API\DataTransferObjects\UserDTO;

class UserController extends AbstractController 
{

  public function __construct($ci) 
  {
    $this->ci = $ci;
  }

  public function testing($request, $response) 
  {
    $users = User::dbQuery()->findAll();
    //Query for users out of database
    $userDTO = UserDTO::fromArray($users);
    //Map what gets returned
    return $response->withJson($userDTO);
  }
}