<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
// require __DIR__.'/../'
require '../app/entity/Product.php';

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