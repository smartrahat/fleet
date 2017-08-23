<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    public function create(){
        return view('employee.create');
    }

    public function index()
    {
        $employees = Employee::all();
        return view('employee.index',compact('employees'));
    }

    public function store(Request $request)
    {
        Employee::create($request->all());
        return redirect('employees');
    }

    public function edit($id)
    {
        $employee = Employee::query()->findOrFail($id);
        return view('employee.edit',compact('employee'));
    }

    public function update($id, Request $request)
    {
        $employee = Employee::query()->findOrFail($id);
        $employee->update($request->all());
        Session::flash('success','"'.$employee->name.'" is updated!');
        return redirect('employees');
    }

    public function destroy($id)
    {
        $employee = Employee::query()->findOrFail($id);
        $employee->delete();
        Session::flash('success','"'.$employee->name.'" has been deleted successfully!');
        return redirect('employees');
    }

}
