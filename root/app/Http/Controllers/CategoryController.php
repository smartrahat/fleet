<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all();
        return view('categories.index',compact('categories'));
    }

    public function store(Request $request)
    {
        Category::query()->create($request->all());
        Session::flash('success','"'.$request->name.'" has been added!');
        return redirect('categories');
    }

    public function edit($id)
    {
        $categories = Category::all();
        $category = Category::query()->findOrFail($id);
        return view('categories.edit',compact('category','categories'));
    }

    public function update($id, Request $request)
    {
        $category = Category::query()->findOrFail($id);
        $category->update($request->all());
        Session::flash('success','"'.$category->name.'" is updated!');
        return redirect('categories');
    }

    public function destroy($id)
    {
        $category = Category::query()->findOrFail($id);
        $category->delete();
        Session::flash('success','"'.$category->name.'" has been deleted successfully!');
        return redirect('categories');
    }
}