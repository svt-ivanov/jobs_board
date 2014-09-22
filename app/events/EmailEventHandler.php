<?php 

class EmailEventHandler
{
    // set the listeners
    public function subscribe($events)
    {
        $events->listen("email.create", "EmailEventHandler@onCreate");   
        $events->listen("email.approve", "EmailEventHandler@onApprove");   
    }

    // happens when a job post is created
    // for the first time in the system
    public function onCreate(Array $input)
    {
        $email = $input["email"];

        Mail::send("emails.welcome", $input, function($message) use ($email)
        {
            $message->from("team@jobsboard.net");
            $message->to($email)   
                    ->subject("Welcome to Jobs Board");   
        });

        return true;
    }

    // happens when the record is stored in db
    // and user email event is fired already
    public function onApprove($id, Array $input)
    {
        $data = $input;
        $data["id"] = $id;

        Mail::send("emails.moderator", $data, function($message)
        {
            $message->from("team@jobsboard.net");
            $message->to("moderator@mailinator.com")   
                    ->subject("Job posted on the Board System");   
        });
    }

}
