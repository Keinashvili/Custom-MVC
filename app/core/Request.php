<?php

namespace app\app\core;

use app\traits\Validate;

abstract class Request
{
    use Validate;

    abstract public function validate();

    public function __construct()
    {
        $this->loadData();
    }

    private function loadData()
    {
        foreach ($_POST as $itemKey => $itemValue){
            if (is_numeric($itemValue) && str_contains($itemValue, '.')){
                $itemValue = (double)$itemValue;
            }elseif(is_numeric($itemValue)){
                $itemValue = (int)$itemValue;
            }

            $this->{$itemKey} = $itemValue;
        }
    }
}