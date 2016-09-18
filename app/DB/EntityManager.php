<?php
namespace cstaton\DB;


use cstaton\Models\AbstractEntityModel;

class EntityManager
{
  private $entityManager;

  public function __construct(\Doctrine\ORM\EntityManager $entityManager)
  {
    $this->entityManager = $entityManager;
  }

  /**
   * @return \Doctrine\ORM\EntityRepository
   */
  public function getRepository($entityModel) {

    return $this->entityManager->getRepository($entityModel);
  }

  public function transactional(callable $func) {

    if (!is_callable($func)) {
      throw new \InvalidArgumentException('Expected argument of type "callable", got "' . gettype($func) . '"');
    }

    $this->entityManager->getConnection()->beginTransaction();

    try {
      $return = call_user_func($func, $this);

      $this->entityManager->flush();
      $this->entityManager->getConnection()->commit();

      return $return ?: true;
    } catch (Exception $e) {

      $this->entityManager->close();
      $this->entityManager->getConnection()->rollBack();

      throw $e;
    }
  }

  public function getReference($class, $id) {

    return $this->entityManager->getReference($class, $id);
  }

  public function flush() {

    return $this->entityManager->flush();
  }

  public function persist(AbstractEntityModel $entityModel) {

    // TODO validate yo

    $entityModel->validate();

    $this->entityManager->persist($entityModel);
  }
}