<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditUserRequest;
use App\Models\User;
use App\Notifications\UserTypeChangedNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(20);
        return view('admin.users.index',compact('users'));
    }

    public function create()
    {
        
    }

    public function store()
    {
        
    }

    public function show(User $user)
    {
        
        return view('admin.users.show',compact('user'));
        
    }

    public function edit(User $user)
    {
        return view('admin.users.edit',compact('user'));
        
    }

    public function update(EditUserRequest $request,  User $user)
    {
        $user_notify = User::where('role_as', '1')->get();
        //dd($request->validated());
         $user->Update($request->validated());
         
        Notification::send($user_notify, new UserTypeChangedNotification($user));
        return redirect()->route('user.index')->with('status','User Role Changed');
    }
}