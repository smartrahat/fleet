<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Repositories\EmployeeRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    private $repository;

    public function __construct(EmployeeRepository $repository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    public function create()
    {
        $repository = $this->repository;
        return view('employee.create',compact('repository'));
    }

    public function index()
    {
        $repository = $this->repository;
        $employees = Employee::all();
        return view('employee.index',compact('employees','repository'));
    }

    public function store(Request $request)
    {
        if($request->hasFile('image')){
            $query = DB::select(DB::Raw("SHOW TABLE STATUS LIKE 'employees'"));
            $name = $query[0]->Auto_increment.'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(base_path().'/../images/employees/', $name);
            $data = $request->except('image');
            $data['image'] = $name;
            Employee::query()->create($data);
        }else{
            Employee::query()->create($request->except('image'));
        }
        Session::flash('success','Vehicle has been added');
        return redirect('employees');
    }

    public function edit($id)
    {
        $repository = $this->repository;
        $employee = Employee::query()->findOrFail($id);
        return view('employee.edit',compact('employee','repository'));
    }

    public function update($id, Request $request)
    {
        $employee = Employee::query()->findOrFail($id);
        if($request->hasFile('image')){
            $name = $id.'.'.$request->file('image')->getClientOriginalExtension();
            File::delete('assets/images/employees/'.$employee->image);
            $request->file('image')->move(base_path().'/../images/employees/', $name);
            $data = $request->except('image');
            $data['image'] = $name;
            $employee->update($data);
        }else{
            $employee->update($request->except('image'));
        }
        Session::flash('success','"'.$employee->name.'" is updated!');
        return redirect('employees');
    }

    public function destroy($id)
    {
        $employee = Employee::query()->findOrFail($id);
        File::delete('assets/images/employees/'.$employee->image);
        $employee->delete();
        Session::flash('success','"'.$employee->name.'" has been deleted successfully!');
        return redirect('employees');
    }
}
