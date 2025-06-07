<?php

namespace app\core;

class Application {

    public Router $router;

    function __construct() {
        $this->router = new Router();
    }
}