<?php

use Doctrine\ORM\Mapping AS ORM;

/**
*@ORM\Entity 
*@ORM\Table(name="sessions")
**/
class Session {
  /**
  *@ORM\Id
  *@ORM\Column(type="integer")
  *@ORM\GeneratedValue(strategy="AUTO")
  */
  protected $id;

  /**
  *@ORM\Column(type="integer")
  */
  protected $user_id;

  /**
  *@ORM\Column(type="string", length=64)
  */
  protected $hash;

  /**
  *@ORM\return integer
  */
  public function getId() {
    return $this->id;
  }


}

