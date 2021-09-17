<?php

namespace App\Listeners;

use App\Events\ThreadWasCreated;
use App\Notifications\NewThreadNotification;
use Log;

class sendNewThreadNotification
{
    public function handle(ThreadWasCreated $event)
    {
        $author = $event->thread->author();

        foreach ($author->followers() as $follower) {
            $follower->notify(new  NewThreadNotification($event->thread));
        }
    }
}
