<?php

namespace app\app\core;

class Router extends Model
{
    public array $routes = [];

    public function get($action, $callback)
    {
        $action = trim($action, '/');
        $action = preg_replace('/{[^}]+}/', '(.+)', $action);
        
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == 'GET'){
            $this->routes[$action]=$callback;
        }
    }

    public function post($action, $callback)
    {
        $action = trim($action, '/');
        $action = preg_replace('/{[^}]+}/', '(.+)', $action);

        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == 'POST'){
            $this->routes[$action]=$callback;
        }
    }

    public function run($action): void
    {
        $action = trim($action, '/');

        $callback = null;
        $params =[];
        foreach ($this->routes as $route => $handler) {
            if (preg_match("%^{$route}$%", $action, $matches) === 1){
                $callback = $handler;
                unset($matches[0]);
                $params = $matches;
                break;
            }
        }
        if (!$callback || !is_callable($callback)){
            http_response_code(404);
            echo "There is an error in your routing";
            exit();
        }

        echo call_user_func($callback, ...$params);
    }
}