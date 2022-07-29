<?php

function dd(...$vars) {
    foreach ($vars as $var){
        echo '<pre>';
        var_dump($var);
        echo '<pre>';
    }

    exit();
}

function renderView($path, $array = []) {
    if ($array){
        foreach ($array as $key => $item){
            $$key = $item;
        }
    }
    ob_start();
    require_once __DIR__ . "/../views/$path";

    return ob_flush();
}