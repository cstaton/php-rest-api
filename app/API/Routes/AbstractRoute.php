<?php
namespace cstaton\API\Routes;

abstract class AbstractRoute
{
  /**
   * @param ApiRouter $router
   * @return void
   */
  public abstract function configure(ApiRouter $router);
}