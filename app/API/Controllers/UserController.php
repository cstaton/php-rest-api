<?php
namespace cstaton\API\Controllers;

use cstaton\Models\User;

class UserController extends AbstractController 
{

  public function __construct($ci) 
  {
    $this->ci = $ci;
  }

  public function testing($request, $response) 
  {
    return $response->withJson('testing controller!!');
  }
}