<?php

use app\Controllers\AuthController;
use app\core\Router;

Router::get('/', function (){
    echo "<a href='/register'>Register</a>";
});

Router::get('/register', function (){
    (new AuthController())->index();
});
