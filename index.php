<?php

require_once __DIR__.'/vendor/autoload.php';

use app\core\Application;
use app\core\Router;


// Framework need to be work like that
$app = new Application();

$router = new Router();

$app->router->get('/', function(){

});

$app->run();
