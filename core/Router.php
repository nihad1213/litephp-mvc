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

        if (is_string($callback)) {
            return $this->renderView($callback);
        }

        return call_user_func($callback);
    }

    /**
     * Render view
     * @return void
     */
    public function renderView($view) {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view);
        return str_replace('{{ content }}', $viewContent, $layoutContent);
        include_once Application::$ROOT_DIR."/views/$view.php";
    }

    public function layoutContent() {
        ob_start();
        include_once Application::$ROOT_DIR."/views/layouts/main.php";
        return ob_get_clean();
    }

    protected function renderOnlyView($view) {
        ob_start();
        include_once Application::$ROOT_DIR."/views/$view.php";
        return ob_get_clean();
    }

}
