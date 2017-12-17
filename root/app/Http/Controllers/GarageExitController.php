<?php

namespace App\Http\Controllers;

use App\GarageExit;
use App\Http\Requests\GarageExitRequest;
use App\Repositories\GarageExitRepository;
use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class GarageExitController extends Controller
{
    public function __construct(GarageExitRepository $repository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    public function index()
    {
        $garageExits = GarageExit::all();
        $i = 1;
        return view('garage_exit.index',compact('garageExits','i'));
    }

    public function create()
    {
        $repository = $this->repository;
        return view('garage_exit.create',compact('repository'));
    }

    public function store(GarageExitRequest $request)
    {
        GarageExit::query()->create($request->all());
        $id = $request['vehicle_id'];
        //dd($id);

        $vehicle = Vehicle::query()->findOrFail($id);
        $request['status_id'] = 2;
        $vehicle->update($request->only(['status_id']));
        Session::flash('success','"'.$request->name.'" has been added!');
        return redirect('garageExits');
    }

    public function edit($id)
    {
        $garageExits = GarageExit::all();
        $garageEntry = GarageExit::query()->findOrFail($id);
        return view('garage_exit.edit',compact('garageEntry','garageExits'));
    }

    public function update($id, GarageExitRequest $request)
    {
        $garageEntry = GarageExit::query()->findOrFail($id);
        $garageEntry->update($request->all());
        Session::flash('success','"'.$garageEntry->name.'" is updated!');
        return redirect('garageExits');
    }

    public function destroy($id)
    {
        $garageEntry = GarageExit::query()->findOrFail($id);
        $vid = Vehicle::query()->findOrFail($garageEntry->vehicle_id);
//        dd($vid->id);
        $vid->status_id=1;
//        dd($vid->status_id);

        DB::table('vehicles')
            ->where('id', $vid->id)
            ->update(['status_id' => $vid->status_id]);

        $garageEntry->delete();
        Session::flash('success','"'.$garageEntry->name.'" has been deleted successfully!');
        return redirect('garageExits');
    }
}
