<?php

namespace App\Http\Controllers;

use App\Garage;
use App\Http\Requests\GarageRequest;
use Illuminate\Support\Facades\Session;

class GarageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $garages = Garage::all();
        return view('garage.index',compact('garages'));
    }

    public function store(GarageRequest $request)
    {
        Garage::query()->create($request->all());
        Session::flash('success','"'.$request->name.'" has been added!');
        return redirect('garages');
    }

    public function edit($id)
    {
        $garages = Garage::all();
        $garage = Garage::query()->findOrFail($id);
        return view('garage.edit',compact('garage','garages'));
    }

    public function update($id, GarageRequest $request)
    {
        $garage = Garage::query()->findOrFail($id);
        $garage->update($request->all());
        Session::flash('success','"'.$garage->name.'" is updated!');
        return redirect('garages');
    }

    public function destroy($id)
    {
        $garage = Garage::query()->findOrFail($id);
        $garage->delete();
        Session::flash('success','"'.$garage->name.'" has been deleted successfully!');
        return redirect('garages');
    }
}
