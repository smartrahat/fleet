<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UnitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $units = Unit::all();
        return view('unit.index',compact('units'));
    }

    public function store(Request $request)
    {
        Unit::query()->create($request->all());
        Session::flash('success','"'.$request->name.'" has been added!');
        return redirect('units');
    }

    public function edit($id)
    {
        $units = Unit::all();
        $unit = Unit::query()->findOrFail($id);
        return view('unit.edit',compact('unit','units'));
    }

    public function update($id, Request $request)
    {
        $unit = Unit::query()->findOrFail($id);
        $unit->update($request->all());
        Session::flash('success','"'.$unit->name.'" is updated!');
        return redirect('units');
    }

    public function destroy($id)
    {
        $unit = Unit::query()->findOrFail($id);
        $unit->delete();
        Session::flash('success','"'.$unit->name.'" has been deleted successfully!');
        return redirect('units');
    }
}
