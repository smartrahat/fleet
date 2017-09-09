<?php

namespace App\Http\Controllers;

use App\Designation;
use App\Http\Requests\DesignationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DesignationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $designations = Designation::all();
        return view('designation.index',compact('designations'));
    }

    public function store(DesignationRequest $request)
    {
        Designation::query()->create($request->all());
        Session::flash('success','"'.$request->name.'" has been added!');
        return redirect('designations');
    }

    public function edit($id)
    {
        $designations = Designation::all();
        $designation = Designation::query()->findOrFail($id);
        return view('designation.edit',compact('designation','designations'));
    }

    public function update($id, Request $request)
    {
        $designation = Designation::query()->findOrFail($id);
        $designation->update($request->all());
        Session::flash('success','"'.$designation->name.'" is updated!');
        return redirect('designations');
    }

    public function destroy($id)
    {
        $designation = Designation::query()->findOrFail($id);
        $designation->delete();
        Session::flash('success','"'.$designation->name.'" has been deleted successfully!');
        return redirect('designations');
    }
}
