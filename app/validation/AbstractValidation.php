<?php

abstract class AbstractValidation
{
    protected $validator = null;

    protected function validate($data, $rules)
    {
        $this->validator = Validator::make($data, $rules);
    }

    public function __construct()
    {
        // set custom validations
        Validator::extend("title", function($attribute, $value) {
            return preg_match('/^[\pL\pN\s\-_\.]+$/u', $value);
        });
    }

    public function passes()
    {
        if ($this->validator === null) {
            throw new Exception("Validator not initalized");
        }

        return $this->validator->passes();
    }

    public function fails()
    {
        if ($this->validator === null) {
            throw new Exception("Validator not initalized");
        }

        return $this->validator->fails();
    }

    public function get()
    {
        return $this->validator;
    }
    
}
