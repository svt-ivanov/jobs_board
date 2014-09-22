<?php

class JobPostsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('job_posts')->delete();

        $moderator = JobPostModel::create(array(
            "title" => "Backend Developer",
            "description" => "New Green StartUp",
            "email" => "johndoe@example.com",
            "approved" => 1
        ), true);

        $moderator = JobPostModel::create(array(
            "title" => "Frontend Developer",
            "description" => "New Green StartUp",
            "email" => "janedoe@example.com",
            "approved" => 1
        ), true);
    }

}
