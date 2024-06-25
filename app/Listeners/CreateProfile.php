<?php

namespace App\Listeners;

use App\Models\User;
use App\Models\Profile;
use App\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateProfile
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\Registered  $event
     * @return void
     */
    public function handle(\Illuminate\Auth\Events\Registered $event)
    {
        $event->user->profile()->create();
    }
}
