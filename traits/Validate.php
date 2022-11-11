<?php

namespace traits;

use app\core\Model;
use app\Database\Database;

trait Validate
{
    public function validateData(): void
    {
        $validated = $this->rules();

        $errors = [];

        foreach ($validated as $key => $value) {
            $explode = explode('|', $value);
            $lastValue = end($explode);
            $rule = explode(':', $lastValue);
            $ruleTableName = end($rule);
            $model = new Model();
            $tables = (new Database())->showTables();

            foreach ($tables as $newTableName) {
                if (in_array($ruleTableName, $newTableName)) {
                    $columns = $model->column($key, $newTableName[0]);
                    foreach ($columns as $column) {
                        if (in_array($this->{$key}, $column)) {
                            $errors[$key] = $key;
                            $_SESSION[$key] = $key . ' already exists!';
                            exit();
                        }
                    }
                }
            }

            if (in_array('required', $explode)) {
                if (is_array($this->{$key})) {
                    foreach ($this->{$key} as $newValue) {
                        if (empty($newValue)) {
                            $errors[$key] = $key;
                            $_SESSION[$key] = $key . ' is required!';
                        }
                    }
                } elseif ($this->{$key} === '') {
                    $errors[$key] = $key;
                    $_SESSION[$key] = $key . ' is required!';
                }
            }

            if (in_array('selected', $explode) && strlen($this->{$key} == 0)) {
                $errors[$key] = $key;
                $_SESSION[$key] = 'Please select an item!';
            }

            if (in_array('string', $explode)) {
                if (!is_string($this->{$key}) && !empty($this->{$key})) {
                    $errors[$key] = $key;
                    $_SESSION[$key] = $key . ' must be string!';
                }
            }

            if (in_array('integer', $explode)) {
                if (!is_integer($this->{$key}) && !empty($this->{$key})) {
                    $errors[$key] = $key;
                    $_SESSION[$key] = $key . ' must be integer!';
                }
            }

            if (in_array('numeric', $explode)) {
                if (is_array($this->{$key})) {
                    foreach ($this->{$key} as $newValue) {
                        if (!is_numeric($newValue)) {
                            $errors[$key] = $key;
                            $_SESSION[$key] = $key . "'s must be numeric!";
                        }
                    }
                } elseif (!is_numeric($this->{$key})) {
                    $errors[$key] = $key;
                    $_SESSION[$key] = $key . ' must be numeric!';
                }
            }
        }

        if ($errors) {
            $uri = $_SERVER['REQUEST_URI'];
            header("Location: $uri");
            exit();
        }
    }
}