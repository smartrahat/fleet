<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;
use App\Repositories\VehicleRepository;


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
        Vehicle::create($request->all());
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
