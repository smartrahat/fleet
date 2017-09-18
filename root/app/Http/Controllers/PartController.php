<?php

namespace App\Http\Controllers;

use App\Part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $parts = Part::all();
        return view('part.index',compact('parts'));
    }

    public function store(Request $request)
    {
        Part::query()->create($request->all());
        Session::flash('success','"'.$request->name.'" has been added!');
        return redirect('parts');
    }

    public function edit($id)
    {
        $parts = Part::all();
        $part = Part::query()->findOrFail($id);
        return view('part.edit',compact('part','parts'));
    }

    public function update($id, Request $request)
    {
        $part = Part::query()->findOrFail($id);
        $part->update($request->all());
        Session::flash('success','"'.$part->name.'" is updated!');
        return redirect('parts');
    }

    public function destroy($id)
    {
        $part = Part::query()->findOrFail($id);
        $part->delete();
        Session::flash('success','"'.$part->name.'" has been deleted successfully!');
        return redirect('parts');
    }
}
