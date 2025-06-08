<?php

namespace app\core;

/**
 * Core Application class.
 * Initializes Request and Router.
 * Runs the app by resolving the current route.
 */
class Application {

    public Router $router;
    public Request $request;

    function __construct() {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run() {
        echo $this->router->resolve();
    }
}
