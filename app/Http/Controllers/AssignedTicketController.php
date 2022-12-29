<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ticket;
use Illuminate\Http\Request;

class AssignedTicketController extends Controller
{
    public function index($id)
    {
        $ticket = Ticket::find($id);
        return view('admin.assignTicket.index',compact('ticket'));
    }

    
}