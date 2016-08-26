<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

// use myApp\Model\User;
ini_set('display_errors', 'on');
date_default_timezone_set('America/Los_Angeles');
//NOT SURE WHY BUt CANT UPDATE MY PHP.INI TO REFLECT THIS :(

require '../vendor/autoload.php';
// require '../app/entity/Product.php';
require '../app/Model/User.php';
require '../app/Model/Product.php';

$app = new \Slim\App([
  'settings' => [
    'displayErrorDetails' => true
  ]
]);

require __DIR__.'/../app/routes/dependencies.php';

$app->get('/hello/{name}', function (Request $request, Response $response) {
  $this->logger->addInfo('Route: /hello/name Pinged!');
  $name = $request->getAttribute('name');
  $response->getBody()->write("abcedHello, $name");
  date('2016');
  phpinfo();
  return $response;
});

$app->get('/api/product', function(Request $request, Response $response) {
  $this->logger->addInfo('Route: /api/product Pinged!');
  $entityManager = $this->em;
  // var_dump($entityManager);
  $products = $entityManager->getRepository('Product')->findAll();
  // var_dump($products);
  $products = array_map(function($product) {
    return $product->getArrayCopy();
  }, $products);

  return $response->withJson($products);
});


$app->get('/customer/list', function(Request $request, Response $response) {
  $this->logger->addInfo('Route: /API/customer/list CALLED');
  // $users = User::dbQuery()->findMeSomeUsers();
  $entityManager = $this->em;
  $users = $entityManager->getRepository('User')->findAll();
  // var_dump($users);
  // $test = $users[0]->getArrayCopy();
  $test = array_map(function ($user) {
    return $user->getArrayCopy();
  }, $users);

  // var_dump($test);
  return $response->withJson($test);
});

$app->run();