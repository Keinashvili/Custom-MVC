<?php
declare(strict_types=1);

require_once __DIR__.'/../vendor/autoload.php';

// Routes
use app\app\core\config\Route;
require_once __DIR__.'/../routes/web.php';
Route::run();