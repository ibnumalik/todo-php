<?php

namespace App\Core;

class Router
{
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    // Router::load()
    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }
    // Router::get()
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    // Router::post
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    // Router::direct
    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            // die(var_dump(...explode('@', $this->routes[$requestType][$uri])));
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }
        throw new Exception('No routes defined for this URI');
    }

    // Route::callAction
    protected function callAction($controller, $action)
    {
        $controller = "App\Controller\\{$controller}";
        $controller = new $controller;

        if (! method_exists($controller, $action)) {
            throw new Exception(
                "{$controller} does not respond to {$action} action."
            );
        }
        return $controller->$action();
    }
}
