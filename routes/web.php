<?php
declare(strict_types=1);

use app\app\core\config\Route;
use app\app\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/show/{id}', [HomeController::class, 'show']);

// for the {} curly braces if element (id) is not found it should make server 404 and display custom error message
Route::post('/delete/{id}', [HomeController::class, 'destroy']);

Route::get('/add', [HomeController::class, 'create']);

Route::post('/insert', [HomeController::class, 'store']);

Route::get('/edit/{id}', [HomeController::class, 'edit']);

Route::post('/update/{id}', [HomeController::class, 'update']);
