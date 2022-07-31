<?php
declare(strict_types=1);

use app\app\core\Router;
use app\app\Controllers\HomeController;
use app\requests\ProductRequest;

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

$router->get('/add', function (){
    (new HomeController())->create();
});
$router->post('/insert', function (){
    (new HomeController())->store(new ProductRequest());
});

$router->get('/edit/{id}', function ($id){
    (new HomeController())->edit($id);
});

$router->post('/update/{id}', function ($id){
    (new HomeController())->update((new ProductRequest()), $id);
});