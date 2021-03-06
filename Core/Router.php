<?php

namespace Core;

use Exception;

/**
 * Class Router
 * @package Core
 */
class Router
{
    /** @var array $routes */
    public $routes = [

        'GET' => [],

        'POST' => []

    ];

    /**
     * @param $file
     * @return static
     */
    public static function load($file)
    {
        $router = new static();

        require $file;

        return $router;
    }

    /**
     * @param $uri
     * @param $controller
     */
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;

        // return $this;
    }

    /**
     * @param $uri
     * @param $controller
     */
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;

        // return $this;
    }

    /**
     * @param $uri
     * @param $requestType
     * @throws Exception
     */
    public function direct($uri, $requestType)
    {
        if(array_key_exists($uri, $this->routes[$requestType])){

            return $this->callAction(

                ...explode('@', $this->routes[$requestType][$uri])

            );

        }

            throw new Exception('No route defined for this URI.');
    }

    /**
     * @param $controller
     * @param $action
     * @throws Exception
     */
    protected function callAction($controller, $action)
    {
        $controller = "\\App\\Controllers\\{$controller}";

        $controller = new $controller;

        if(! method_exists($controller, $action)){

            throw new Exception("{$controller} does not respond to the {$action} action.");

        }

        $controller->$action();
    }
}