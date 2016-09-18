<?php
namespace cstaton\DB;

use Doctrine\ORM\EntityManager as DoctrineEntityManager;
use Doctrine\ORM\Tools\Setup;

class Database
{
  private static $entityManager;

  public final static function getEntityManager() {

    if (self::$entityManager == NULL) {

      $paths = array();
      $isDevMode = true;

      if (isset($GLOBALS['UNIT_TEST_MODE'])) {
        $connectionOptions = array(
          'driver' => 'pdo_mysql',
          'host' => '127.0.0.1',
          'dbname' => 'cstaton_data_test',
          'user' => 'root',
          'password' => 'letmein');
      } else {
        //Hard code for now
        $connectionOptions = array(
          'driver' => 'pdo_mysql',
          'host' => '127.0.0.1',
          'dbname' => 'my_app_db',
          'user' => 'root',
          'password' => ''
        );
      }

      $proxyPath = isset($GLOBALS['UNIT_TEST_MODE']) ? '/tmp/unit' : '/tmp';

      $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, $proxyPath);
      self::$entityManager = new EntityManager(DoctrineEntityManager::create($connectionOptions, $config));
      return self::$entityManager;
    }
    else {
      return self::$entityManager;
    }
  }

  public final static function getReference($class, $id) {

    $referencedEntity = self::getEntityManager()->getReference($class, $id);

    return $referencedEntity;
  }

  /**
   * @param $function
   * @return mixed
   */
  public final static function executeTransaction(callable $function) {

    return self::getEntityManager()->transactional($function);
  }

  public final static function getQueryRepository($class) {

    return self::getEntityManager()->getRepository($class);
  }
}