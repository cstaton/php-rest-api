<?php
namespace cstaton\API\Routes;

use Slim;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class ApiRouter extends Slim\App
{
  public function __construct()
  {
    parent::__construct([
      'settings' => [
        'displayErrorDetails' => true
      ]
    ]);

    $container = $this->getContainer();

    // add the error handler
    // $container['errorHandler'] = function($c) {

    //   return function ($request, $response, $exception) use(&$c) {

    //     // TODO if validation exception return 4xx


    //     // TODO return 500 in standard error JSON payload

    //     \Utility::errorlog('SLIM: ' . $exception->getMessage());

    //     foreach($exception->getTrace() as $trace) {

    //       $file = isset($trace['file']) ? $trace['file'] : '';
    //       $function = isset($trace['function']) ? $trace['function'] : '';
    //       $line = isset($trace['line']) ? $trace['line'] : '';

    //       \Utility::errorlog('SLIM: '. $file . ' ' . $function . ' '. $line);
    //     }

    //     return $c['response']->withJson($exception->getMessage(), 500);
    //   };
    // };
  }

  public function registerRoute(AbstractRoute $resource)
  {
    $resource->configure($this);
  }

  public function globalAuth() {
    //Can handle middleware Auth on routes here
  }
}