<?php

// namespace myApp\Model;

// use Doctrine\ORM\EntityManager;
// use Doctrine\ORM\Tools\Setup;

// abstract class AbstractModel {

//   public final static function dbQuery() {
//     // $paths = array();
//     $paths = array(__DIR__);
//     $isDevMode = true;
//     $connectionOptions = array(
//       'driver' => 'pdo_mysql',
//       'host' => '127.0.0.1',
//       'dbname' => 'my_app_db',
//       'user' => 'root',
//       'password' => ''
//     );

//     $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
//     $entityManager = EntityManager::create($connectionOptions, $config);
//     return $entityManager->getRepository(get_called_class());
//   }

// }