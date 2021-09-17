<?php

namespace App\Listeners;

use App\Events\ReplyWasCreated;

class AwardPointsForCreatingReply
{
    public function handle(ReplyWasCreated $event)
    {
        $amount = config('points.rewards.new_reply');
        $message = 'User created a reply';

        $author = $event->reply->author();

        $author->addPoints($amount, $message);
    }
}
