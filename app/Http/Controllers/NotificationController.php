<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function notification()
    {
        $user = Auth::User();
        return view('admin.partials.notification',compact('user'));
    }
}