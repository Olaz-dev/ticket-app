<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(20);
        return view('admin.users.index',compact('users'));
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
        
    }
}