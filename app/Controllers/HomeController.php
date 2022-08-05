<?php

namespace app\app\controllers;

use app\app\core\Controller;
use app\models\Product;
use app\requests\ProductRequest;

class HomeController extends Controller
{
    public function index()
    {
        return parent::view('index.php');
    }

    public function documentation()
    {
        return parent::view('documentation.php');
    }
}