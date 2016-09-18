<?php
namespace cstaton\API\Controllers;

use cstaton\Models\AbstractEntityModel;
use \Psr\Http\Message\ResponseInterface as Response;

abstract class AbstractController
{
  protected $ci;

  /**
   * @return LegacyController
   */
  public function legacy() {

    return $this->ci->get('legacy');
  }

  /**
   * @param Response $response
   * @param AbstractEntityModel $entity
   * @return Response
   */
  public function successResponse(Response $response, AbstractEntityModel $entity) {

    // error 0 | or error codes(wiki)
    // message
    // type
    // data = nested objects
    // messages (array of error messages objects)

    $data = array('error' => 0, 'data' => $entity, 'message' => 'operation succeeded');

    return $response->withJson($data);
  }

  // TODO follow standard on response object wrapper
  // error 0 | or error codes(wiki)
  // message
  // type
  // data = nested objects
  // messages (array of error messages objects)
  //       error 0 | codes
  //       message
  //       type | level indication to say wether it is true error or just message
  // TODO in the wrapper handle the HTTP response to respond per HTTP spec
}