<?php

namespace App\Http\Controllers;

use App\ExpenseCategory;
use App\Http\Requests\ExpenseCategoryRequest;
use Illuminate\Support\Facades\Session;

class ExpenseCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $expenseCategories = ExpenseCategory::all();
        return view('expenseCategory.index',compact('expenseCategories'));
    }

    public function store(ExpenseCategoryRequest $request)
    {
        ExpenseCategory::query()->create($request->all());
        Session::flash('success','"'.$request->name.'" has been added!');
        return redirect('expenseCategories');
    }

    public function edit($id)
    {
        $expenseCategories = ExpenseCategory::all();
        $expenseCategory = ExpenseCategory::query()->findOrFail($id);
        return view('expenseCategory.edit',compact('expenseCategories','expenseCategory'));
    }

    public function update($id, ExpenseCategoryRequest $request)
    {
        $expenseCategory = ExpenseCategory::query()->findOrFail($id);
        $expenseCategory->update($request->all());
        Session::flash('success','"'.$expenseCategory->name.'" is updated!');
        return redirect('expenseCategories');
    }

    public function destroy($id)
    {
        $expenseCategory = ExpenseCategory::query()->findOrFail($id);
        $expenseCategory->delete();
        Session::flash('success','"'.$expenseCategory->name.'" has been deleted successfully!');
        return redirect('expenseCategories');
    }
}
