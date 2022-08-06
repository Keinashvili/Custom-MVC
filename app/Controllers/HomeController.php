<?php

namespace app\app\Controllers;

use app\app\core\Controller;

class HomeController extends Controller
{
    public function documentation()
    {
        return parent::view('documentation.php');
    }
}