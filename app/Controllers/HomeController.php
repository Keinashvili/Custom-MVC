<?php

namespace app\app\Controllers;

use app\app\core\Controller;
use app\models\Product;

class HomeController extends Controller
{
    public function documentation()
    {
        return parent::view('documentation.php');
    }
}