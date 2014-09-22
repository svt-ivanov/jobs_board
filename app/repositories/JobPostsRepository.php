<?php

use Illuminate\Events\Dispatcher;

class JobPostsRepository extends AbstractRepository
{
    protected $events;

    public function __construct(JobPostModel $model, JobPostValidation $validation, Dispatcher $events)
    {
        $this->model = $model;
        $this->validation = $validation;
        $this->events = $events;   
    }

    public function job_posts()
    {
        return $this->model->withApproved()->get();
    }

    public function job_post($id)
    {
        return $this->model->withId($id)->withApproved()->first();
    }

    public function store($input)
    {
        $fired = null;

        $this->validation->store($input);
        if ($this->validation->fails()) {
            $this->errors = $this->validation->get();
            return false;
        }

        if ( ! $this->checkUserEmail($input["email"])) {
            // fire an user email event if this is first posting of the user
            $fired = $this->events->fire("email.create", array($input));
        } else {
            // set db boolean field to be true
            $input["approved"] = 1;
        }

        $job_post = new $this->model;
        if ( ! $job_post->add($input)) {
            $this->errors = "Can't create job post";
            return false;
        }

        if ( ! empty($fired) && is_array($fired)) {
            // fire an moderator email event if email is sent
            // to the user already and db record is created
            $this->events->fire("email.approve", array($job_post->id, $input));
        }

        return true;
    }

    public function approve($id)
    {
        $job_post = $this->model->find($id);
        if ( ! $job_post->toggleState(1)) {
            $this->errors = "Can't mark job post state as approved";
            return false;
        }

        return true;
    }

    public function reject($id)
    {
        $job_post = $this->model->find($id);
        if ( ! $job_post->toggleState(0)) {
            $this->errors = "Can't mark job post state as spam";
            return false;
        }

        return true;
    }

    private function checkUserEmail($email)
    {
        if ($this->model->withApproved()->exist($email)->count() > 0) {
            return true;
        }

        return false;        
    }

}
