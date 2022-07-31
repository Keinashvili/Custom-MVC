<?php

namespace app\app\core;

class Controller
{
    public function view($path, $array = []){
        if ($array){
            foreach ($array as $key => $item){
                $$key = $item;
            }
        }
        ob_start();
        // If view doesn't exist it displays a custom error template
        if (!file_exists(__DIR__ . "/../../views/$path")) {
            http_response_code(404);
            renderView('errors/_404_.php');
            exit();
        }
        else {
            require_once __DIR__ . "/../../views/$path";
        }

        return ob_flush();
    }
}