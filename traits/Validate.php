<?php

namespace app\traits;

use app\app\core\Model;

trait Validate
{
    public function validateData()
    {
        $validated = $this->rules();

        $errors = [];

        foreach ($validated as $key => $value){

            $explode = explode('|', $value);
            $lastValue = end($explode);
            $required = $explode[0];
            $rule = explode(':', $lastValue);
            $ruleTableName = end($rule);
            $model = new Model();
            $tables = $model->showTables();

            if ($required === 'required'  && strlen($this->{$key}) < 1){
                $errors[$key] = $key;
                $_SESSION[$key] = $key . ' is required!';
            }

            foreach ($tables as $newTableName) {
                if (in_array($ruleTableName, $newTableName)){
                    $columns = $model->column($key, $newTableName[0]);
                    foreach ($columns as $column) {
                        if (in_array($this->{$key}, $column)) {
                            $_SESSION[$key] = $key . ' already exists!';
                        }
                    }
                }
            }
            if (!property_exists($this, $key)){
                $_SESSION[$key] = $key . ' doesn\'t exist!';
                exit();
            }

        }

        if ($errors){
            $uri = $_SERVER['REQUEST_URI'];
            header("Location: $uri");
        }
    }
}