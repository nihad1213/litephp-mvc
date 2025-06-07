<?php

namespace app\core;

class Application {

    public Router $router;

    function __construct() {
        $this->router = new Router();
    }


    public function run() {
        $this->router->resolve();
    }
}