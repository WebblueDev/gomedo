<?php

namespace Gomedo\Providers;

use Gomedo\Events\UserHasRegistered;
use Gomedo\Events\UserHasVerified;
use Gomedo\Listeners\SendVerificationEmail;
use Gomedo\Listeners\SendWelcomeEmail;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        UserHasRegistered::class => [
            SendVerificationEmail::class
        ],
        UserHasVerified::class => [
            SendWelcomeEmail::class
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
