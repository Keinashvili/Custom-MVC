<?php
declare(strict_types=1);

require_once __DIR__.'/../vendor/autoload.php';

//Routes
use app\app\core\Router;
$router = new Router();
require_once __DIR__.'/../routes/web.php';
$action = $_SERVER['REQUEST_URI'];
$router->run($action);
