<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
   public function index(Request $request)
   {
    return view('customer.users.signup');
   }

   public function save(Request $request)
   {
    $validated = $request->validate([
                "firstname" => 'required',
                "lastname" => 'required',
                "email" => 'required|email',
                "password" => 'required'
    ]);
        $user = new User();
        $data['firstname'] = $request->input('firstname'); 
        $data['lastname'] = $request->input('lastname'); 
        $data['email'] = $request->input('email'); 
        $data['password'] =Hash::make($request->input('password'));
        
        $user::create($data);
        return redirect("/login");
   }
}