<?php

namespace App\Http\Controllers;

use App\Http\Requests\TripRequest;
use App\Repositories\TripRepository;
use App\Trip;
use Illuminate\Support\Facades\Session;

class TripController extends Controller
{
    private $repository;

    public function __construct(TripRepository $repository){
        $this->middleware('auth');
        $this->repository=$repository;
        //ProgramRepository is the class name & also the file name
    }

    public function create(){
        $repository = $this->repository;
        return view('trip.create',compact('repository'));
        //je view te repository field gulo lagbe shei view te  repository pass korte hobe
    }

    public function index()
    {
        $trips = Trip::all();
        return view('trip.index',compact('trips','repository'));
    }

    public function store(TripRequest $request)
    {
        Trip::query()->create($request->all());
        return redirect('trips');
    }

    public function edit($id)
    {
        $repository = $this->repository;
        $trips = Trip::all();
        $trip = Trip::query()->findOrFail($id);
        return view('trip.edit',compact('trip','trips','repository'));
    }

    public function update($id, TripRequest $request)
    {
        $trip = Trip::query()->findOrFail($id);
        Session::flash('success','"'.$trip->name.'" is updated!');
        $trip->update($request->all());
        return redirect('trips');
    }

    public function destroy($id)
    {
        $trip = Trip::query()->findOrFail($id);
        $trip->delete();
        Session::flash('success','"'.$trip->name.'" has been deleted successfully!');
        return redirect('trips');
    }
}
