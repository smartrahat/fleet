<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Driver;
use Illuminate\Support\Facades\Session;

class DriverController extends Controller
{

    public function create(){
        return view('driver.create');
    }

    public function index()
    {
        $drivers = Driver::all();
        return view('driver.index',compact('drivers'));
    }

    public function store(Request $request)
    {
        Driver::create($request->all());
        return redirect('drivers');
    }

    public function edit($id)
    {
        $driver = Driver::query()->findOrFail($id);
        return view('driver.edit',compact('driver'));
    }

    public function update($id, Request $request)
    {
        $driver = Driver::query()->findOrFail($id);
        $driver->update($request->all());
        Session::flash('success','"'.$driver->name.'" is updated!');
        return redirect('drivers');
    }

    public function destroy($id)
    {
        $driver = Driver::
        query()->findOrFail($id);
        $driver->delete();
        Session::flash('success','"'.$driver->name.'" has been deleted successfully!');
        return redirect('drivers');
    }
}
