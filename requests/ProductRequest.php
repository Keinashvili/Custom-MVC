<?php

namespace app\requests;

use app\app\core\Request;

class ProductRequest extends Request
{
    public function validate(): array
    {
        return [
            'title'  => 'required',
            'price'  => 'required',
            'list_price' => 'required',
            'brand' => 'required',
            'image' => 'required',
            'description' => 'required',
        ];
    }
}