<?php

namespace Database\Seeders;

use App\Models\Reply;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Notifications\NewReplyNotification;
use Illuminate\Foundation\Testing\WithFaker;

class NotificationSeeder extends Seeder
{
    use WithFaker;

    public function run()
    {
        Reply::all()->each(function (Reply $reply) {
            $reply->author()->notifications()->create([
                'id'   => Str::uuid()->toString(),
                'type' => NewReplyNotification::class,
                'data' => [
                    'type' => 'new_reply',
                    'reply' => $reply->id(),
                    'replyable_id' => $reply->replyable_id,
                    'replyable_type' => $reply->replyable_type,
                    'replyable_subject' => $reply->replyAble()->replyAbleSubject(),
                ],
                'created_at' => $reply->createdAt(),
                'updated_at' => $reply->createdAt(),
            ]);
        });
    }
}
