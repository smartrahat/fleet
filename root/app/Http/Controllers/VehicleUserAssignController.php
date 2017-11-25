<?php

namespace App\Http\Controllers;

use App\Repositories\VehicleUserAssignRepository;
use App\Vehicle;
use App\VehicleUserAssign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VehicleUserAssignController extends Controller
{
    public function __construct(VehicleUserAssignRepository $repository)
    {
        $this->middleware('auth');
        $this->repository=$repository;
    }

    public function index()
    {
        $brands = VehicleUserAssign::all();
        return view('vehicle_user_assign.index',compact('brands'));
    }

    public function create(){
        $repository = $this->repository;
        $vehicles = Vehicle::all();
        return view('vehicle_user_assign.create',compact('repository','vehicles'));
    }

    public function store(Request $request)
    {
        VehicleUserAssign::query()->create($request->all());
        Session::flash('success','"'.$request->name.'" has been added!');
        return redirect('vehicleUserAssigns');
    }

    public function edit($id)
    {
        $brands = VehicleUserAssign::all();
        $brand = VehicleUserAssign::query()->findOrFail($id);
        return view('vehicle_user_assign.edit',compact('brand','brands'));
    }

    public function update($id, Request $request)
    {
        $brand = VehicleUserAssign::query()->findOrFail($id);
        $brand->update($request->all());
        Session::flash('success','"'.$brand->name.'" is updated!');
        return redirect('vehicleUserAssigns');
    }

    public function destroy($id)
    {
        $brand = VehicleUserAssign::query()->findOrFail($id);
        $brand->delete();
        Session::flash('success','"'.$brand->name.'" has been deleted successfully!');
        return redirect('vehicleUserAssigns');
    }
}
