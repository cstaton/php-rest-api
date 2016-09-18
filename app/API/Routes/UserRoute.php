<?php
namespace cstaton\API\Routes;

class UserRoute extends AbstractRoute 
{

  public function configure(ApiRouter $router) 
  {
    $router->get('/user/test', 'cstaton\API\Controllers\UserController:testing');
  }
}