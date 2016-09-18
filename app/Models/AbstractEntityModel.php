<?php
namespace cstaton\Models;

use cstaton\DB\Database;
use cstaton\DB\Queries\AbstractEntityQueries;

abstract class AbstractEntityModel
{
  public final static function getEntityManager() {

    return Database::getEntityManager();
  }

  /**
   * @return AbstractEntityQueries
   */
  public final static function dbQuery()
  {
    $className = get_called_class();
    
    return self::getEntityManager()->getRepository($className);
  }

  public final static function getReference($id) {

    return Database::getReference(get_called_class(), $id);
  }


  // public abstract function validate();
}