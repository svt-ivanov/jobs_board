<?php

use Svetoslav\Library\Repository\JobPostRepository;

class JobPostsController extends \BaseController 
{
	private $repository;

	public function __construct(JobPostRepository $repository)
	{
	    $this->repository = $repository;
	}

	public function index()
	{
		return View::make("job_posts.list")
			->with("job_posts", $this->repository->job_posts());
	}

	public function create()
	{
		return View::make("job_posts.create");
	}

	public function store()
	{
		if ( ! $this->repository->store(Input::all())) {
		    return Redirect::back()
		        ->withErrors($this->repository->errors())
		        ->withInput();
		}

		return Redirect::to("/job_posts");
	}

	public function show($id)
	{
		$job_post = $this->repository->job_post($id);
		if ($job_post === null) {
			return Redirect::to("job_posts"); // post doesn't exist
		}	

		return View::make("job_posts.show")->with("job_post", $job_post);
	}

	public function approvePost($id)
	{
		$approved = $this->repository->approve($id) ? true : false;		

		return View::make("job_posts.approve")
			->with("id", $id)
			->with("approved", $approved)
			->withErrors($this->repository->errors());
	}

	public function rejectPost($id)
	{
		$approved = false;
	
		$this->repository->reject($id);		

		return View::make("job_posts.approve")
			->with("id", $id)
			->with("approved", $approved)
			->withErrors($this->repository->errors());
	}

}
