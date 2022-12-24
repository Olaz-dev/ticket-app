<?php

namespace App\Listeners;
use App\Models\User;

use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\TicketNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
//use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Notification;

class SendNewTicketNotification
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $admins = User::whereHas('role_as',function($query){
            $query->where('id',1);
        })->get();
        Notification::send($admins, new TicketNotification($event->user));
        
    }
}