<?php

namespace App\Http\Controllers;

use App\Models\Priority;
use Illuminate\Http\Request;
use App\Http\Requests\EditPriorityRequest;
use App\Http\Requests\CreatePriorityRequest;

class PriorityController extends Controller
{
    public function index()
    {
        $priorities = Priority::paginate(20);
        return view('admin.priority.index',compact('priorities'));
    }

    public function create()
    {
        return view('admin.priority.create');
    }

    public function store(CreatePriorityRequest $request)
    {
        Priority::Create($request->validated());
        return redirect()->route('priority.index')->with('status',"Created Successfully"); 
    }
    
    public function edit(Priority $priority)
    {
       return view('admin.priority.edit',compact('priority'));
    }
    
    public function update(EditPriorityRequest $request, Priority $priority)
    {
        $priority->update($request->validated());
        return redirect()->route('priority.index')->with('status',"$priority->priority_name  Edited Successfully"); 
    }
     public function __construct()
    {
        $this->middleware(['auth','isAdmin']); 
    }



    
}