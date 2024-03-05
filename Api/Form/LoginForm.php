<?php

namespace Api\Form;

use Core\ValidationException;
use Core\Validator;

class LoginForm extends Validator
{
    protected $errors = [];

    public function __construct(public array $attributes)
    {
        if (!Validator::email($this->attributes["email"])) {
            $this->errors["email"] = "Invalid email!";
        }

        if (!Validator::string($this->attributes["password"])) {
            $this->errors["password"] = "Password is required!";
        }
    }

    public static function validate($attributes)
    {
        $instance = new static($attributes);
        if ($instance->hasError()) {
            ValidationException::throw($instance->getErrors(), ["email" => $instance->attributes["email"]]);
        }
        return $instance;
    }

    public function hasError()
    {

        return (bool)count($this->errors);
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function addError($key, $value)
    {
        $this->errors[$key] = $value;
    }

}