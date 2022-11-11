<?php

namespace app\core;

use traits\Validate;

abstract class Request
{
    use Validate;

    abstract public function rules();

    public function __construct()
    {
        $this->loadData();
    }

    private function loadData(): void
    {
        foreach ($_POST as $itemKey => $itemValue) {

            $this->{$itemKey} = $itemValue;
        }
    }
}