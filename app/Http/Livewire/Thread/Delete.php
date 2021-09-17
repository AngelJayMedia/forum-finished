<?php

namespace App\Http\Livewire\Thread;

use Livewire\Component;
use App\Policies\ThreadPolicy;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Delete extends Component
{
    use AuthorizesRequests;

    public $thread;
    public $confirmingThreadDeletion = false;

    public function confirmThreadDeletion()
    {
        $this->resetErrorBag();
        $this->confirmingThreadDeletion = true;
    }

    public function deleteThread()
    {
        $this->authorize(ThreadPolicy::DELETE, $this->thread);
        $this->thread->delete();
        session()->flash('success', 'Thread Deleted!');
        return redirect()->route('threads.index');
    }

    public function render()
    {
        return view('livewire.thread.delete');
    }
}
