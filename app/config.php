<?php

require __DIR__. "/../vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(__DIR__."/entity");

$isDevMode = false;

$dbParams = array(
  'driver' => 'pdo_mysql',
  'dbname' => 'logbugs',
  'host' => 'localhost',
  'user' => 'root',
  'password' => 'secrets',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);

$entityManager = EntityManager::create($dbParams, $config);