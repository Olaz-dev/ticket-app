<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::find(1);

        return view('admin.dashboard.dashboard',compact('user'));
    }
}