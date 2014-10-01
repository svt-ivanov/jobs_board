<?php namespace Acme\Library\Event; 

class EmailEventHandler
{
    // set the listeners
    public function subscribe($events)
    {
        $events->listen("email.create", "EmailEventHandler@onCreate");   
    }

    // happens whenever the record is stored in the db
    public function onCreate(Array $data)
    {
        $email = $data["email"];

        Mail::send("emails.welcome", $data, function($message) use ($email)
        {
            $message->from("team@jobsboard.net");
            $message->to($email)   
                    ->subject("Welcome to Jobs Board");   
        });

        Mail::send("emails.moderator", $data, function($message)
        {
            $message->from("team@jobsboard.net");
            $message->to("moderator@mailinator.com")   
                    ->subject("Job posted on the Board System");   
        });
    }

}
