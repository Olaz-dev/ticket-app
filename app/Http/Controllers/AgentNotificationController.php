<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\TicketAssignedNotification;

class AgentNotificationController extends Controller
{
     public function index()
    {
        $notifications = auth()->user()->unreadNotifications;
        return view('agent.notification.index',compact('notifications'));
    }

    public function update(Request $request, TicketAssignedNotification $notification)
    {
        auth()->user()->unreadNotifications->markAsRead();

        return redirect()->route('agent.notifications.index');
    }

    public function destroy()
    {
        auth()->user()->unreadNotifications->markAsRead();

        return redirect()->route('agent.notifications.index');
    }
}
