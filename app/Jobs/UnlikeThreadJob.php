<?php

namespace App\Jobs;

use App\Models\Thread;
use App\Models\User;

class UnlikeThreadJob
{
    private $thread;
    private $user;

    public function __construct(Thread $thread, User $user)
    {
        $this->thread = $thread;
        $this->user = $user;
    }


    public function handle()
    {
        $this->thread->dislikedBy($this->user);
    }
}
