<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehiclesRequest;
use App\Program;
use App\Vehicle;
use App\Repositories\VehicleRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;


class VehicleController extends Controller
{
    private $repository;

    public function __construct(VehicleRepository $repository){
        $this->middleware('auth');
        $this->repository = $repository;
    }

    public function index(Vehicle $vehicle)
    {
        $vehicle = $vehicle->newQuery();
        if(Input::has('q')){
            $q = Input::get('q');
            $vehicle->where('name','like','%'.$q.'%')
                //->orWhere('description',$q)
                //->orWhere('owner',$q)
                ->orWhere('vehicleNo','like','%'.$q.'%')
                //->orWhere('status',$q)
                ->orWhere('mobile','like','%'.$q.'%');
        }
        //$vehicles = Vehicle::query()->paginate(10);
        $vehicles = $vehicle->paginate(10);
        //dd($vehicles);
        return view('vehicle.index',compact('vehicles','repository'));
    }

    public function create(){
        $repository = $this->repository;
        return view('vehicle.create',compact('repository'));
    }

    public function store(VehiclesRequest $request)
    {
        if($request->hasFile('image')){
            $query = DB::select(DB::Raw("SHOW TABLE STATUS LIKE 'vehicles'"));
            $name = $query[0]->Auto_increment.'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(base_path().'/../images/vehicles/', $name);
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

    public function update($id, VehiclesRequest $request)
    {
        $vehicle = Vehicle::query()->findOrFail($id);
        if($request->hasFile('image')){
            $name = $id.'.'.$request->file('image')->getClientOriginalExtension();
            File::delete('assets/images/vehicles/'.$vehicle->image);
            $request->file('image')->move(base_path().'/../images/vehicles/', $name);
            $data = $request->except('image');
            $data['image'] = $name;
            $vehicle->update($data);
        }else{
            $vehicle->update($request->except('image'));
        }
        Session::flash('success','"'.$vehicle->name.'" is updated!');
        return redirect('vehicles');
    }

    public function destroy($id)
    {
        $vehicle = Vehicle::query()->findOrFail($id);
        $vehicle->delete();
        return redirect('vehicles');
    }

    public function show($id)
    {
        $vehicle = Vehicle::query()->findOrFail($id);
        return view('vehicle.show',compact('programs','vehicle'));
    }
}
