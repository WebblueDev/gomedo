<?php

namespace Gomedo\Listeners;

use Gomedo\Events\UserHasRegistered;
use Gomedo\Notifications\Verify;

class SendVerificationEmail
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
     * @param  UserHasRegistered  $event
     * @return void
     */
    public function handle(UserHasRegistered $event)
    {
        $event->user->notify(new Verify($event->user));
    }
}
