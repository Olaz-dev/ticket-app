<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ticket;
use App\Models\ticketassigned_user;
use App\Models\assigned_ticket;
use App\Models\ticket_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssignedTicketController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $assigned = ticketassigned_user::where('user_id',$user->id)->get('ticket_id');
        $tickets =Ticket::find($assigned);
        $user_found = ticket_user::where('ticket_id',$assigned)->get('user_id');
        // dd($user_found);
        return view('agent.assignTicket.index',compact('tickets','user'));
    }

    
}