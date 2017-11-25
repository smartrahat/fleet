<?php

namespace App\Http\Controllers;

use App\Expense;
use App\Http\Requests\ExpenseRequest;
use App\Repositories\ExpenseRepository;
use Illuminate\Support\Facades\Session;

class ExpenseController extends Controller
{
    public function __construct(ExpenseRepository $repository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    public function index()
    {
        $expenses = Expense::all();
        $total = Expense::query()->sum('amount');
        return view('expense.index',compact('expenses','total'));
    }

    public function create()
    {
        $repository = $this->repository;
        return view('expense.create',compact('repository'));
    }

    public function store(ExpenseRequest $request)
    {
        Expense::query()->create($request->all());
        Session::flash('success','"'.$request->name.'" has been added!');
        return redirect('expenses');
    }

    public function edit($id)
    {
        $expenses = Expense::all();
        $expense = Expense::query()->findOrFail($id);
        return view('expenses.edit',compact('expense','expenses'));
    }

    public function update($id, ExpenseRequest $request)
    {
        $expense = Expense::query()->findOrFail($id);
        $expense->update($request->all());
        Session::flash('success','"'.$expense->name.'" is updated!');
        return redirect('expenses');
    }

    public function destroy($id)
    {
        $expense = Expense::query()->findOrFail($id);
        $expense->delete();
        Session::flash('success','"'.$expense->name.'" has been deleted successfully!');
        return redirect('expenses');
    }
}
