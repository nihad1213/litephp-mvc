<?php

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../config/config.php';

use app\core\Application;


// Framework need to be work like that
$app = new Application(dirname(__DIR__));


$app->router->get('/', 'home');


$app->router->get('/test', function(){
    return 'This is test';
});



$app->router->get('/contact', 'contact');

$app->run();
