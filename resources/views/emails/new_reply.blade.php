@component('mail::message')
**{{ $reply->author()->name() }}** has replied to this thread

@component('mail::panel')
{{ $reply->excerpt(200) }}
@endcomponent

@component('mail::button', ['url' => route('threads.show', ['category' => $reply->replyAble()->category->slug(), 'thread' => $reply->replyAble()->slug()])])

View Thread
@endcomponent

Thanks,
Forum
@endcomponent
