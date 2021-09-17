<?php

namespace App\Providers;

use App\Events\ReplyWasCreated;
use App\Events\ThreadWasCreated;
use App\Listeners\AwardPointsForCreatingReply;
use App\Listeners\AwardPointsForCreatingThread;
use App\Listeners\SendNewReplyNotification;
use App\Listeners\sendNewThreadNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ReplyWasCreated::class => [
            SendNewReplyNotification::class,
            AwardPointsForCreatingReply::class,
        ],
        ThreadWasCreated::class => [
            sendNewThreadNotification::class,
            AwardPointsForCreatingThread::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
