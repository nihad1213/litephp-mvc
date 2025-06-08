<?php

namespace app\core;

/**
 * Request class.
 * Handles HTTP request data.
 */
class Request {

    /**
     * Get request path without query string.
     */
    public function getPath() {
        $path = $_SERVER['REQUEST_URI'] ?? '?';
        $position = strpos($path, '?');

        if ($position === false) {
            return $path;
        }

        return substr($path, 0, $position);
    }

    /**
     * Get HTTP method.
     */
    public function getMethod() {
        $method = $_SERVER['REQUEST_METHOD'];
        return strtolower($method);
    }
}
