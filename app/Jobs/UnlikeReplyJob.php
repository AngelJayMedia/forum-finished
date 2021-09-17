<?php

namespace App\Jobs;

use App\Models\Reply;
use App\Models\User;

class UnlikeReplyJob
{
    private $reply;
    private $user;

    public function __construct(Reply $reply, User $user)
    {
        $this->reply = $reply;
        $this->user = $user;
    }

    public function handle()
    {
        $this->reply->dislikedBy($this->user);
    }
}
