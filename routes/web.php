<?php

use app\app\controllers\HomeController;
use app\app\core\config\Route;
use app\requests\ProductRequest;

Route::get('/', [HomeController::class, 'index']);

Route::get('/add', [HomeController::class, 'create']);

// Post action always should be defined like this
Route::post('/insert', function (){
    (new HomeController())->store(new ProductRequest());
});

Route::post('/remove-product/{id}', [HomeController::class, 'index']);
