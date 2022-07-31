<?php
declare(strict_types=1);

use app\app\core\Router;
use app\app\Controllers\HomeController;

$router = new Router();

$router->get('/', function (){
    (new HomeController())->index();
});

//$router->get('/show/{id}', [HomeController::class, 'show']);

$router->get('/show/{id}', function ($id){
    (new HomeController())->show($id);
});

// for the {} curly braces if element (id) is not found it should make server 404 and display custom error message
$router->post('/delete/{id}', [HomeController::class, 'destroy']);

$router->get('/add', [HomeController::class, 'create']);

$router->post('/insert', [HomeController::class, 'store']);

$router->get('/edit/{id}', [HomeController::class, 'edit']);

$router->post('/update/{id}', [HomeController::class, 'update']);
