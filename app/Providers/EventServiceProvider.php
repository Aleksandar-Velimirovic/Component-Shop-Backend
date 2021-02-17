<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\NewUserHasRegisteredEvent;
use App\Listeners\SendEmailToNewUserListener;
use App\Events\UserHasOrderedEvent;
use App\Listeners\SendMailToUserAfterOrderListener;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        NewUserHasRegisteredEvent::class => [
            SendEmailToNewUserListener::class,
        ],
        UserHasOrderedEvent::class => [
            SendMailToUserAfterOrderListener::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        // Event::listen(
        //     NewUserHasRegisteredEvent::class,
        //     [SendEmailToNewUserListener::class, 'handle']
        // );
    }
}
