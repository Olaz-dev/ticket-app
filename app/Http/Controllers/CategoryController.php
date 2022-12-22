<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\EditCategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(20);
        return view('admin.category.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CreateCategoryRequest $request)
    {
        Category::create($request->validated());
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit',compact('category'));
    }

    public function update(EditCategoryRequest $request, Category $category)
    {
       $category->update($request->validated());
       return redirect()->route('category.index')->with('status',"Edited Successfully"); 
    }

    public function destroy(Category $category)
    {
       $category->delete();
        return redirect()->route('category.index');
    }
    
    public function __construct()
    {
        $this->middleware(['auth','isAdmin']);
    }
    
}