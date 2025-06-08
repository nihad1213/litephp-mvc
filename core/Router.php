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
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? null;

        if ($callback === null) {
            echo 'Not Founded!';
            exit;
        }     

        echo call_user_func($callback);

        // var_dump($path);
        // var_dump($method);
        // var_dump($callback);
    }
}
