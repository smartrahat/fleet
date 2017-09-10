<?php

namespace App\Http\Controllers;

use App\Http\Requests\TripCostRequest;
use App\Repositories\TripRepository;
use App\TripCost;
use Illuminate\Support\Facades\Session;

class TripCostController extends Controller
{
    private $repository;

    public function __construct(TripRepository $repository){
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
        return view('tripCost.index',compact('tripCosts','repository'));
    }

    public function store(TripCostRequest $request)
    {
        TripCost::create($request->all());
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
}
