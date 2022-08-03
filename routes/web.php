<?php
declare(strict_types=1);

use app\app\core\config\Route;
use app\app\Controllers\auth\LoginController;
use app\app\Controllers\auth\RegisterController;
use app\app\Controllers\HomeController;
use app\requests\ProductRequest;
use app\requests\UserRequest;


Route::get('/',[HomeController::class, 'index']);

// CRUD Routes
Route::get('/show/{id}',[HomeController::class, 'show']);

Route::post('/delete/{id}', [HomeController::class, 'destroy']);

Route::get('/add', [HomeController::class, 'create']);

//Route::post('/insert', [HomeController::class, 'store']);

Route::post('/insert', function (){
    (new HomeController())->store((new ProductRequest()));
});

Route::get('/edit/{id}', [HomeController::class, 'edit']);

Route::post('/update/{id}', [HomeController::class, 'update']);

// Auth Routes
Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', function (){
    (new RegisterController())->register((new UserRequest()));
});

