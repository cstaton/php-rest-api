<?php
namespace cstaton\API\DataTransferObjects;


abstract class AbstractDTO implements \JsonSerializable
{
  public function JsonSerialize()
  {
    $vars = get_object_vars($this);

    return $vars;
  }

  public static function fromArray($list)
  {
    $dtos = array();

    foreach($list as $item) {

      $className = get_called_class();
      // var_dump($className);
      // var_dump($item);
      array_push($dtos, new $className($item));
    }

    return $dtos;
  }
}