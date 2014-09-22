<?php

class JobPostModel extends Eloquent
{
    protected $table = "job_posts";
    protected $softDelete = true;

    public function scopeWithApproved($query)
    {
        return $query->where("approved", "=", 1);
    }

    public function scopeWithId($query, $id)
    {
        return $query->where("id", "=", $id);
    }

    public function scopeExist($query, $email)
    {
        return $query->where("email", "=", $email)->take(1);
    }

    public function add($input)
    {
        $this->title = $input["title"];
        $this->description = $input["description"];
        $this->email = $input["email"];

        return $this->save();
    }

    public function toggleState($approved)
    {
        $this->approved = $approved;
        return $this->save();
    }

}
