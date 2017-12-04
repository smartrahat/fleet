<?php

namespace App\Http\Controllers;

use App\Repositories\VehicleUserAssignRepository;
use App\Vehicle;
use App\VehicleUserAssign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
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
        $repository = $this->repository;
        $vehicles = Vehicle::all();
        if(Input::has('employee_id')){
            $employees = Input::get('employee_id');
            $vehicles = Vehicle::query()->where('employee_id',$employees)->get();

        }else{
            $vehicles = [];
            $employees = null;
        }

//        dd($employees);




        return view('vehicle_user_assign.index',compact('vehicles','vehicle','repository','employees'));
    }

    public function create(){
        $repository = $this->repository;
        $vehicles = Vehicle::all();
        return view('vehicle_user_assign.create',compact('repository','vehicles'));
    }

    public function store(Request $request)
    {
        $ids = $request->vehicles;
        foreach($ids as $id){
            $vehicle = Vehicle::query()->findOrFail($id);
            $vehicle->update(['employee_id' => $request->employee_id]);
        }

        Session::flash('success','"'.$request->name.'" has been added!');
        return redirect('vehicleUserAssigns');
    }

    public function edit($id)
    {
        $brands = VehicleUserAssign::all();
        $brand = VehicleUserAssign::query()->findOrFail($id);
        return view('vehicle_user_assign.edit',compact('brand','brands'));
    }

    public function destroy($id)
    {
        return redirect('vehicleUserAssigns');
    }
}
