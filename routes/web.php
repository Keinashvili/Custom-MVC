<?php

use app\app\controllers\HomeController;
use app\app\core\config\Route;

Route::get('/', [HomeController::class, 'documentation']);


