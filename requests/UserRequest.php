<?php

namespace app\requests;

use app\app\core\Request;

class UserRequest extends Request
{

    public function validate() : array
    {
        return [
            'name'  => 'required',
            'email'  => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
        ];
    }
}