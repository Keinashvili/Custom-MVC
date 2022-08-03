<?php

namespace app\app\Controllers\auth;

use app\app\core\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return parent::view('auth/login.php');
    }

    public function login()
    {

    }
}