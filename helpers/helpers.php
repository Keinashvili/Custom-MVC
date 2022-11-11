<?php

use JetBrains\PhpStorm\NoReturn;

if (!function_exists('renderErrorView')) {
    function renderErrorView($code, $path, $array = []): bool
    {
        if ($array) {
            foreach ($array as $key => $item) {
                $$key = $item;
            }
        }
        http_response_code($code);
        ob_start();
        require_once __DIR__ . "/../views/$path";

        return ob_flush();
    }
}

if (!function_exists('view')) {
    function view($path, $array = [])
    {
        if ($array) {
            foreach ($array as $key => $item) {
                $$key = $item;
            }
        }
        ob_start();
        require_once __DIR__ . "/../views/$path";

        return ob_flush();
    }
}

if (!function_exists('dd')) {
    function dd(...$vars)
    {
        foreach ($vars as $var) {
            echo '<pre>';
            var_dump($var);
            echo '<pre>';
        }
        exit();
    }
}

if (!function_exists('error')) {
    function error($name)
    {
        if (key_exists("$name", $_SESSION)) {
            echo $_SESSION["$name"];
        }
    }
}

if (!function_exists('routes')){
    function routes($routes){
        include_once __DIR__."/../routes/$routes";
    }
}