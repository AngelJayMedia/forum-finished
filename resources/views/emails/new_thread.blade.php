@component('mail::message')
**{{ $thread->author()->name() }}** has created a new thread

@component('mail::panel')
{{ $thread->excerpt(200) }}
@endcomponent

@component('mail::button', ['url' => route('threads.show', ['category' => $thread->category->slug(), 'thread' => $thread->slug()])])

View Thread
@endcomponent

Thanks,
Forum
@endcomponent
