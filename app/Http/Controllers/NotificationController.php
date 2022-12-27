<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\TicketNotification;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = auth()->user()->unreadNotifications;
        return view('admin.notification.index',compact('notifications'));
    }

    public function update(Request $request, TicketNotification $notification)
    {
        auth()->user()->unreadNotifications->markAsRead();

        return redirect()->route('notifications.index');
    }

    public function destroy()
    {
        auth()->user()->unreadNotifications->markAsRead();

        return redirect()->route('notifications.index');
    }
}