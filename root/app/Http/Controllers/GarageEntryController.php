<?php

namespace App\Http\Controllers;

use App\GarageEntry;
use App\Http\Requests\GarageEntryRequest;
use App\Http\Requests\GarageRequest;
use App\Problem;
use App\Repositories\GarageEntryRepository;
use App\Vehicle;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class GarageEntryController extends Controller
{
    public function __construct(GarageEntryRepository $repository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    public function index(GarageRequest $request)
    {
        $repository = $this->repository;
        if(Input::has('garage_id')){
            $garageEntries = GarageEntry::query()->where('garage_id',$request->garage_id)->get();
        }else{
            $garageEntries= [];
        }
        Problem::query()->sum('problem_status');
        $i = 1;
        $x = 0;
        return view('garage_entry.index',compact('garageEntries','repository','i','x'));
    }

    public function create()
    {
        $repository = $this->repository;
        return view('garage_entry.create',compact('repository'));
    }

    public function store(GarageEntryRequest $request)
    {
        GarageEntry::query()->create($request->all());
        $id = $request['vehicle_id'];
        //dd($id);

        $vehicle = Vehicle::query()->findOrFail($id);
        $request['status_id'] = 1;
        $vehicle->update($request->only(['status_id']));
        Session::flash('success','"'.$request->name.'" has been added!');
        return redirect('garageEntries');
    }

    public function edit($id)
    {
        $garageEntries = GarageEntry::all();
        $garageEntry = GarageEntry::query()->findOrFail($id);
        return view('garageEntries.edit',compact('garageEntry','garageEntries'));
    }

    public function update($id, GarageEntryRequest $request)
    {
        $garageEntry = GarageEntry::query()->findOrFail($id);
        $garageEntry->update($request->all());
        Session::flash('success','"'.$garageEntry->name.'" is updated!');
        return redirect('garageEntries');
    }

    public function destroy($id)
    {
        $garageEntry = GarageEntry::query()->findOrFail($id);
        $vid = Vehicle::query()->findOrFail($garageEntry->vehicle_id);
//        dd($vid->id);
        $vid->status_id=2;
//        dd($vid->status_id);

        DB::table('vehicles')
            ->where('id', $vid->id)
            ->update(['status_id' => $vid->status_id]);

        $garageEntry->delete();
        Session::flash('success','"'.$garageEntry->name.'" has been deleted successfully!');
        return redirect('garageEntries');
    }

}
