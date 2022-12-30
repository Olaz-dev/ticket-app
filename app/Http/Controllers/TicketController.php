<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Label;
use App\Models\Ticket;
use App\Models\Category;
use App\Models\Priority;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\EditTicketRequest;
use App\Notifications\TicketNotification;
use App\Http\Requests\CreateTicketRequest;
use App\Models\ticketassigned_user;
use App\Notifications\TicketAssignedNotification;
use Illuminate\Support\Facades\Notification;
use TicketAssignedUser;

//use Illuminate\Notifications\Notification;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        $ticket_assigned = ticketassigned_user::all();
        return view ('admin.ticket.index',compact('tickets','ticket_assigned'));
        
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
    $user = User::where('role_as', '1')->get();
    $olaz =   $request->input('user_id');
    $ticket = Ticket::Create($request->validated());
    //notify's Users with Admin=1 role
    Notification::send($user, new TicketNotification($ticket));
    $ticket->getUser()->attach($olaz);
    return redirect()->route('mytickets');
    
    }

    public function edit(Ticket $ticket)
    {
        return view('admin.ticket.edit');
    }

    public function update(EditTicketRequest $request, Ticket $ticket)
    {
        $user = User::where('role_as', '1')->get();
        $agent_id = $request->input('agent');
        $user_agent = User::where('id',$agent_id)->get();
        $ticket->Update($request->validated('status'));
        $ticket->assignedAgent()->attach($agent_id);
     
       Notification::send($user_agent, new TicketAssignedNotification($ticket));
       Notification::send($user, new TicketNotification($ticket));
       return redirect()->route('ticket.index');
    }

  public function show(Ticket $ticket)
    {
        $ticket = Ticket::find($ticket->id);
        $user = User::where('role_as',"2")->get();
        return view('admin.ticket.show',compact('ticket','user'));
    }

  
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