<?php
declare(strict_types=1);

use app\app\core\Router;
use app\app\Controllers\HomeController;

$router = new Router();

$router->get('/', function (){
    (new HomeController())->index();
});

$router->get('/show/{id}', function ($id){
    (new HomeController())->show($id);
});

$router->post('/delete/{id}', function ($id){
    (new HomeController())->destroy($id);
});