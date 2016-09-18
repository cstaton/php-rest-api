<?php

$container = $app->getContainer();

$container['em'] = function() {

  $paths = array(__DIR__."/entity");

  $isDevMode = false;

  $dbParams = array(
    'driver' => 'pdo_mysql',
    'dbname' => 'logbugs',
    'host' => 'localhost',
    'user' => 'root',
    'password' => 'secrets',
  );

  $config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);

  return \Doctrine\ORM\EntityManager::create($dbParams, $config);
};

$container['logger'] = function($c) {
  $logger = new \Monolog\logger('my_logger');
  $file_handler = new \Monolog\Handler\StreamHandler("../app/logs/app.log");
  $logger->pushHandler($file_handler);
  return $logger;
};

// $container['App\Controller\Product'] = function($c) {
  // $EntityManager = $c->get('em');
  // $products = $EntityManager->getRepository('Product')->findAll();
  // return 
// }