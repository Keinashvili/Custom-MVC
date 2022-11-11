<?php
session_start();

require_once __DIR__ . '/../vendor/autoload.php';

use app\Services\RouteService;

RouteService::run();
RouteService::boot();
