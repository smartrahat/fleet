<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Driver;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class DriverController extends Controller
{

    public function create(){
        return view('driver.create');
    }

    public function index()
    {
        $drivers = Driver::all();
        //$drivers = Driver::orderBy('created_at','asc')->get();
        return view('driver.index',compact('drivers'));
    }

    public function store(Request $request)
    {
        if($request->hasFile('image')){
            $query = DB::select(DB::Raw("SHOW TABLE STATUS LIKE 'drivers'"));
            $name = $query[0]->Auto_increment.'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(base_path().'/../images/drivers/', $name);
            $data = $request->except('image');
            $data['image'] = $name;
            Driver::query()->create($data);
        }else{
            Driver::query()->create($request->except('image'));
        }
        Session::flash('success','Driver has been added');
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
        if($request->hasFile('image')){
            $name = $id.'.'.$request->file('image')->getClientOriginalExtension();
            File::delete('assets/images/drivers/'.$driver->image);
            $request->file('image')->move(base_path().'/../images/drivers/', $name);
            $data = $request->except('image');
            $data['image'] = $name;
            $driver->update($data);
        }else{
            $driver->update($request->except('image'));
        }
        Session::flash('success','"'.$driver->name.'" is updated!');
        return redirect('drivers');
    }

    public function destroy($id)
    {
        $driver = Driver::query()->findOrFail($id);
        $driver->delete();
        Session::flash('success','"'.$driver->name.'" has been deleted successfully!');
        return redirect('drivers');
    }
}
