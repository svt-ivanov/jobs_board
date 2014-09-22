<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Job posts routing
Route::group(array("prefix" => "job_posts"), function() {
    Route::get("/", "JobPostsController@index");
    Route::get("/create", "JobPostsController@create");
    Route::post("/", "JobPostsController@store");

    Route::get("/{id}", "JobPostsController@show")->where("id", "[0-9]+");

    Route::get("/{id}/approve", "JobPostsController@approvePost")->where("id", "[0-9]+");
    Route::get("/{id}/reject", "JobPostsController@rejectPost")->where("id", "[0-9]+");
});

