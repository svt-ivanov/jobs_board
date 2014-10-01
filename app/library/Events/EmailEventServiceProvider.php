<?php namespace Acme\Library\Event;

use Acme\Library\Event\EmailEventHandler;
use Illuminate\Support\ServiceProvider;

class EmailEventServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->events->subscribe(new EmailEventHandler);
    }
}
