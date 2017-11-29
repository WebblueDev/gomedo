<?php

namespace Gomedo\Listeners;

use Gomedo\Events\UserHasVerified;
use Gomedo\Notifications\Welcome;

class SendWelcomeEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserHasVerified  $event
     * @return void
     */
    public function handle(UserHasVerified $event)
    {
        $event->user->notify(new Welcome($event->user));
    }
}
