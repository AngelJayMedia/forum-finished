<?php

namespace App\Http\Controllers\Pages;

use App\Models\User;
use App\Http\Controllers\Controller;

class FollowController extends Controller
{
    public function store(User $user)
    {
        auth()->user()->toggleFollow($user);

        return redirect()->route('profile', $user->userName());
    }
}
