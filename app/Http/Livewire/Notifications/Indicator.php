<?php

namespace App\Http\Livewire\Notifications;

use Livewire\Component;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class Indicator extends Component
{
    public $hasNotifications;

    protected $listeners = [
        'markedAsRead' => 'setHasNotification',
    ];

    public function render(): View
    {
        $this->hasNotifications = $this->setHasNotification(
            Auth::user()->unreadNotifications()->count()
        );

        return view('livewire.notifications.indicator', [
            'hasNotification' => $this->hasNotifications,
        ]);
    }

    public function setHasNotification(int $count): bool
    {
        return $count > 0;
    }
}
