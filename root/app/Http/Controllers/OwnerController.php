<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\owner;
use Illuminate\Support\Facades\Session;

class OwnerController extends Controller
{
    public function create(){
        return view('owner.create');
    }

    public function index()
    {
        $owners = owner::all();
        return view('owner.index',compact('owners'));
    }

    public function store(Request $request)
    {
        owner::create($request->all());
        return redirect('owners');
    }

    public function edit($id)
    {
        $owners = owner::all();
        $owner = owner::query()->findOrFail($id);
        return view('owner.edit',compact('owner','owners'));
    }

    public function update($id, Request $request)
    {
        $owner = owner::query()->findOrFail($id);
        $owner->update($request->all());
        Session::flash('success','"'.$owner->name.'" is updated!');
        return redirect('owners');
    }

    public function destroy($id)
    {
        $owner = owner::query()->findOrFail($id);
        $owner->delete();
        Session::flash('success','"'.$owner->name.'" has been deleted successfully!');
        return redirect('owners');
    }

}
