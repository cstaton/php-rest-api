<?php
namespace cstaton\API\Routes;

class UserRoute extends AbstractRoute 
{

  public function configure(ApiRouter $router) 
  {
    $router->post('/user/test', 'cstaton\API\Controllers\UserController:testing')->add(function(Request $request, Response, $response, callable $next) {
      //Middleware route per individual route
      return next($request, $response);
    });
  }
}