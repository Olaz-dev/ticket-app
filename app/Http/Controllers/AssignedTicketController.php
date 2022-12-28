<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignedTicketController extends Controller
{
    public function index()
    {
        return view('admin.assignTicket.index');
    }
}