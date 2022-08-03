<?php
declare(strict_types=1);
session_start();
require_once __DIR__.'/../vendor/autoload.php';

//Routes
use app\app\core\config\Route;
require_once __DIR__.'/../routes/web.php';
//for router running
$action = $_SERVER['REQUEST_URI'];
Route::run($action);

