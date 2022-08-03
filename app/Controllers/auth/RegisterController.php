<?php

namespace app\app\Controllers\auth;

use app\app\core\Controller;
use app\models\User;
use app\requests\UserRequest;
use app\traits\Validate;

class RegisterController extends Controller
{
    public function index()
    {
        return parent::view('auth/register.php');
    }

    public function register(UserRequest $request)
    {
        $request->validateData('/register');
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'confirm_password' => $request->confirm_password,
        ]);
        header("Location: /");
    }
}