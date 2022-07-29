<?php

namespace app\app\core;

class Router
{
    private static array $routes;
    private static array $handlers;
    private const METHOD_GET = 'GET';
    private const METHOD_POST = 'POST';

    public static function get($path, $handler)
    {
        $path = trim($path, '/');
        $path = preg_replace('/{[^}]+}/', '(.+)', $path);
        self::addHandler(self::METHOD_GET, $path, self::$routes[$path] = $handler);
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == self::METHOD_POST) {
            echo 'Method GET is not supported for this route';
            exit();
        }
    }


    public static function post($path, $handler)
    {
        $path = trim($path, '/');
        $path = preg_replace('/{[^}]+}/', '(.+)', $path);
        self::addHandler(self::METHOD_POST, $path, self::$routes[$path] = $handler);
    }

    public static function run()
    {
        $action = $_SERVER['REQUEST_URI'];
        $action = trim($action, '/');

        $callback = null;
        $params = [];
        foreach (static::$routes as $route => $handler) {
            if (preg_match("%^{$route}$%", $action, $matches) === 1){
                $callback = $handler;
                unset($matches[0]);
                $params = $matches;
                break;
            }
        }
        if (!$callback || !is_callable($callback)){
            http_response_code(404);
            echo "Route not Found";
            exit();
        }

        return call_user_func($callback, ...$params);
    }

    private static function addHandler(string $method, string $path, $handler): void
    {
        static::$handlers[$method . $path] = [
            'path' => $path,
            'method' => $method,
            'handler' => $handler,
        ];
    }
}