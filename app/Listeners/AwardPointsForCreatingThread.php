<?php

namespace App\Listeners;

use App\Events\ThreadWasCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AwardPointsForCreatingThread
{

    public function handle(ThreadWasCreated $event)
    {
        $amount = config('points.rewards.new_thread');
        $message = 'User created a thread';

        $author = $event->thread->author();

        $author->addPoints($amount, $message);
    }
}
