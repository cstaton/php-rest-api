<?php


ini_set('display_errors', 'on');
date_default_timezone_set('America/Los_Angeles');
//NOT SURE WHY BUt CANT UPDATE MY PHP.INI TO REFLECT THIS :(

require '../vendor/autoload.php';
<<<<<<< HEAD



use cstaton\API\Routes\ApiRouter;
use cstaton\API\Routes\UserRoute;

$router = new ApiRouter();

$router->registerRoute(new UserRoute());

$router->run();
=======
// require __DIR__.'/../'
require '../app/entity/Product.php';

$app = new \Slim\App([
  'settings' => [
    'displayErrorDetails' => true
  ]
]);

require __DIR__.'/../app/routes/dependencies.php';

$app->get('/hello/{name}', function (Request $request, Response $response) {
  $name = $request->getAttribute('name');
  $this->logger->addInfo("Route: /hello/name Pinged! value = $name");
  $response->getBody()->write("Hello, $name");

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

$app->run();
>>>>>>> 4a5a8eb6bf3c1221db2988c8b9fa6c6827044db0
