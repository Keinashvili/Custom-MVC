<?php

use app\app\controllers\HomeController;
use app\app\core\config\Route;
use app\requests\ProductRequest;

Route::get('/', function (){
    (new HomeController())->index();
});

Route::get('/add', function (){
    (new HomeController())->create();
});

Route::post('/insert', function (){
    (new HomeController())->store(new ProductRequest());
});

Route::post('/remove-product', function (){
    (new HomeController())->destroy((new ProductRequest())->ids);
});
