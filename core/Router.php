<?php

namespace app\core;

/**
 * Router class.
 * Stores routes and matches requests.
 */
class Router {

    public Request $request;
    protected array $routes = [];

    public function __construct(Request $request) {
        $this->request = $request;
    }

    /**
     * Register GET route and callback.
     */
    public function get($path, $callback) {
        $this->routes['get'][$path] = $callback; 
    }

    /**
     * Resolve current request path.
     */
    public function resolve() {
        $path = $this->request->getPath();
        var_dump($path);
    }
}
