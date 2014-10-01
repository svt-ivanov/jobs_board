<?php namespace Acme\Library\Repository;

abstract class AbstractRepository
{
    protected $model;
    protected $validation;

    protected $errors = null;

    public function errors()
    {
        return $this->errors;
    }
    
}
