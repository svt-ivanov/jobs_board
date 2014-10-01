<?php namespace Acme\Library\Validation;

class JobPostValidation extends AbstractValidation
{
    protected $rules = array(
        "title" => array("required", "title"),
        "description" => array("required"),
        "email" => array("required", "email")
    );
    
    public function store($data)
    {
        $this->validate($data, $this->rules);
    }
    
}
