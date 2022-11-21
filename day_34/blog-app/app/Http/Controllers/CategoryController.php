<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('category.index');
    }
    public function store(Request $request)
    {
        Category::addCategory($request);
        return redirect('/category/add')->with('message', 'Category Added Successfully');
    }
    public function manage(){
        $this->categories = Category::all();
        return view('category.manage',['categories'=>$this->categories]);
    }
    public function edit($id)
    {
        $this->category = Category::find($id);
        return view('category.edit', ['category' => $this->category]);
    }
}
