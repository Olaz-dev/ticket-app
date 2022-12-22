<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Label;
use App\Models\Ticket;
use App\Models\Category;
use App\Models\Priority;
use Illuminate\Http\Request;
use App\Http\Requests\EditTicketRequest;
use App\Http\Requests\CreateTicketRequest;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        return view ('admin.ticket.index');
        
    }
    public function create()
    {
        $labels = Label::all();
        $categories = Category::all();
        $priorities = Priority::all();
        return  view('admin.ticket.create',compact('labels','categories','priorities'));
    }

    public function store(CreateTicketRequest $request)
    {
    
     Ticket::Create($request->validated());
    }

    public function edit(Ticket $ticket)
    {
        return view('admin.ticket.edit');
    }

    public function update(EditTicketRequest $request, Ticket $ticket)
    {
       $ticket->Update($request->validated());
       return redirect()->route('ticket.index');
    }

    public function __construct()
    {
        $this->middleware(['auth','isAdmin'])->except(['create']);
    }


    
    // public function ticket(Request $req, $type = "", $id = "")
    // {
    //     switch($type){
    //         case "create":
    //             $labels = Label::all();
    //             $categories = Category::all();
    //             $priorities = Priority::all();
    //             return view('customer.tickets.create',compact('categories','labels','priorities'));
    //         break;
    
    //         default:
    //         return view('tickets.index');
    //         break;

    //     }
    // }
}