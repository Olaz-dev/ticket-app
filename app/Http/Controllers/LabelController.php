<?php

namespace App\Http\Controllers;

use App\Models\Label;
use Illuminate\Http\Request;
use App\Http\Requests\CreateLabelRequest;
use App\Http\Requests\EditLabelRequest;

class LabelController extends Controller
{
    public function index()
    {
        $labels = Label::paginate(20);
        return view('admin.label.index',compact('labels'));
    }

    public function create()
    {
        return view('admin.label.create');
    }

    public function store(CreateLabelRequest $request)
    {
        Label::Create($request->validated());
    }

    public function edit(Label $label )
    {
        return view('admin.label.edit',compact('label'));
    }

    public function update(EditLabelRequest $request, Label $label)
    {
        $label->update($request->validated());
        return redirect()->route('label.index');
    }

    public function __construct()
    {
        $this->middleware(['auth','isAdmin']);
    }
    
}