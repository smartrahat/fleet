<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;
use App\Repositories\VehicleRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class VehicleController extends Controller
{
    private $repository;

    public function __construct(VehicleRepository $repository){
        $this->middleware('auth');
        $this->repository = $repository;
    }

    public function index()
    {
        //$repository = $this->repository;
        $vehicles = Vehicle::query()->paginate(10);
        return view('vehicle.index',compact('vehicles','repository'));
    }

    public function create(){
        $repository = $this->repository;
        return view('vehicle.create',compact('repository'));
    }

    public function store(Request $request)
    {
        if($request->hasFile('image')){
            $query = DB::select(DB::Raw("SHOW TABLE STATUS LIKE 'vehicles'"));
            $name = $query[0]->Auto_increment.'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(base_path().'/images/vehicles/', $name);
            $data = $request->except('image');
            $data['image'] = $name;
            Vehicle::query()->create($data);
        }else{
            Vehicle::query()->create($request->except('image'));
        }
        Session::flash('success','Vehicle has been added');
        return redirect('vehicles');
    }

    public function edit($id)
    {
        $repository = $this->repository;
        $vehicles = Vehicle::all();
        $vehicle = Vehicle::query()->findOrFail($id);
        return view('vehicle.edit',compact('vehicle','vehicles','repository'));
    }

    public function update($id, Request $request)
    {
        $vehicle = Vehicle::query()->findOrFail($id);
        $vehicle->update($request->all());
        return redirect('vehicles');
    }

    public function destroy($id)
    {
        $vehicle = Vehicle::query()->findOrFail($id);
        $vehicle->delete();
        return redirect('vehicles');
    }
}
