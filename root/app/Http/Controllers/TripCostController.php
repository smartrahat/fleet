<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Http\Requests\TripCostRequest;
use App\Repositories\TripCostRepository;
use App\Trip;
use App\TripCost;
use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TripCostController extends Controller
{
    private $repository;

    public function __construct(TripCostRepository $repository){
        $this->middleware('auth');
        $this->repository=$repository;
        //ProgramRepository is the class name & also the file name
    }

    public function create(){
        $repository = $this->repository;
        return view('tripCost.create',compact('repository'));
        //je view te repository field gulo lagbe shei view te  repository pass korte hobe
    }

    public function index()
    {
        $tripCosts = TripCost::all();
        return view('tripCost.index',compact('tripCosts'));
    }

    public function store(TripCostRequest $request)
    {

        TripCost::create($request->except('vehicles'));

        $vid = Vehicle::query()->findOrFail($request['vehicle_id']);
        $vid->status_id = 2;
        DB::table('vehicles')
            ->where('id', $vid->id)
            ->update(['status_id' => $vid->status_id]);
        return redirect('tripCosts');
    }

    public function edit($id)
    {
        $repository = $this->repository;
        $tripCosts = TripCost::all();
        $tripCost = TripCost::query()->findOrFail($id);
        return view('tripCost.edit',compact('tripCost','tripCosts','repository'));
    }

    public function update($id, TripCostRequest $request)
    {
        $tripCost = TripCost::query()->findOrFail($id);
        Session::flash('success','"'.$tripCost->name.'" is updated!');
        $tripCost->update($request->all());
        return redirect('tripCosts');
    }

    public function destroy($id)
    {
        $tripCost = TripCost::query()->findOrFail($id);
        $tripCost->delete();
        Session::flash('success','"'.$tripCost->name.'" has been deleted successfully!');
        return redirect('tripCosts');
    }

    public function driverTripCost(Request $request)
    {
        $id = $request->get('program');
        $drivers = Trip::query()->where('program_id',$id)->where('trip_status',1)->get();
        $combo='<option>'.null.'<option>';
        foreach($drivers as $driver){
//            dd($driver);
            $combo.= '<option value="'.$driver->driver->id.'">'.$driver->driver->name.'</option>';
        }
        $combo.='';
        return $combo;
    }

    public function vehicleTripCost(Request $request)
    {
        $id = $request->get('driver');
        $pid = $request->get('program');
        $vehicles = Trip::query()->where('driver_id',$id)->where('program_id',$pid)->get();

//        dd($vehicles);

//        $combo='<option>'.null.'<option>';
        $combo= '';
        foreach($vehicles as $vehicle){
//            $combo.= '<option value="'.$vehicle->id.'">'.$vehicle->vehicle->vehicleNo.'</option>';
//            dd($vehicle);
            $combo= array($vehicle->vehicle->vehicleNo,$vehicle->vehicle->id);
        }
//        $combo.='';
        return $combo;
    }
}
