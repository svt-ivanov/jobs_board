<?php

class JobPostsRepositoryTest extends TestCase 
{
    private $repo = null;

    public function setUp() 
    {
        parent::setUp();

        $this->repo = App::make("Acme\Library\Repository\JobPostRepository");
    }

    public function testSelectJobPosts()
    {
        $jobs = $this->repo->job_posts();

        $this->assertInstanceOf("Illuminate\Support\Collection", $jobs);
        $this->assertEquals(2, $jobs->count());
    }

    public function testSelectJobPost()
    {
        $job = $this->repo->job_post(1);

        $this->assertInstanceOf("JobPostModel", $job);
    }

    public function testSelectJobPostWithNonExistingId()
    {
        $job = $this->repo->job_post(999);

        $this->assertNull($job);
    }

    public function testCreateJobPostWithMissingTitle()
    {
        $job = $this->repo->store(array(
            "description" => "Dummy Description",
            "email" => "johndoe@example.com"
        ));        

        $this->assertFalse($job);
    }

    public function testCreateJobPostWithMissingDescription()
    {
        $job = $this->repo->store(array(
            "title" => "Dummy Title",
            "email" => "johndoe@example.com"
        ));        

        $this->assertFalse($job);
    }

    public function testCreateJobPostWithMissingEmail()
    {
        $job = $this->repo->store(array(
            "title" => "Dummy Title",
            "description" => "Dummy Description"
        ));        

        $this->assertFalse($job);
    }

}
