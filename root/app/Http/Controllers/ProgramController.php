<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Requests\ProgramRequest;
use App\Program;
use App\Repositories\ProgramRepository;
use App\Trip;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class ProgramController extends Controller
{
    private $repository;

    public function __construct(ProgramRepository $repository){
        $this->middleware('auth');
        $this->repository=$repository;
        //programRepository is the class name & also the file name
    }

    public function create(){
        $repository = $this->repository;
        return view('program.create',compact('repository'));
        //je view te repository field gulo lagbe shei view te  repository pass korte hobe
    }

    public function index()
    {
        $repository = $this->repository;
        $programs = Program::all();
        return view('program.index',compact('programs','repository'));
    }

    public function store(ProgramRequest $request)
    {
        Program::query()->create($request->all());
        return redirect('programs');
    }

    public function edit($id)
    {
        $repository = $this->repository;
        $programs = Program::all();
        $program = Program::query()->findOrFail($id);
        return view('program.edit',compact('program','programs','repository'));
    }

    public function update($id, ProgramRequest $request)
    {
        $program = Program::query()->findOrFail($id);
        Session::flash('success','"'.$program->name.'" is updated!');
        $program->update($request->all());
        return redirect('programs');
    }

    public function destroy($id)
    {
        $program = Program::query()->findOrFail($id);
        $program->delete();
        Session::flash('success','"'.$program->name.'" has been deleted successfully!');
        return redirect('programs');
    }

    public function rotation(Trip $trip){
        $trip = $trip->newQuery();

        if(Input::has('vehicle')){
            $start = Carbon::parse(Input::get('start'));
            $end = Carbon::parse(Input::get('end'));
            $program = Program::query()->where('vehicle_id',Input::get('vehicle'))->whereBetween('date',[$start,$end])->pluck('id')->toArray();
            $trip->whereIn('program_id',$program);
        }

        $trips = $trip->orderByDesc('created_at')->get();
        $repository = $this->repository;
        return view('program.rotation',compact('trips','repository'));

    }
}
