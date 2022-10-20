<?php

use app\app\controllers\HomeController;
use app\app\core\Router;

Router::get('/', function (){
    (new HomeController())->documentation();
});
