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
        return view ('admin.ticket.index',compact('tickets'));
        
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
    $olaz =   $request->input('user_id');
    $ticket = Ticket::Create($request->validated());
    $ticket->getUser()->attach($olaz);
    return redirect()->route('mytickets');
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

    // public function show()
    // {
        
    // }
    // public function __construct()
    // {
    //     $this->middleware(['auth','isAdmin'])->except(['create','store']);
    //     $this->middleware('auth')->only('create','store');
    // }


    
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