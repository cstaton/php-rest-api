<?php


ini_set('display_errors', 'on');
date_default_timezone_set('America/Los_Angeles');
//NOT SURE WHY BUt CANT UPDATE MY PHP.INI TO REFLECT THIS :(

require '../vendor/autoload.php';



use cstaton\API\Routes\ApiRouter;
use cstaton\API\Routes\UserRoute;

$router = new ApiRouter();

$router->registerRoute(new UserRoute());

$router->run();