<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Requests\ProgramRequest;
use App\Income;
use App\Program;
use App\Repositories\ProgramRepository;
use App\Trip;
use App\Vehicle;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\TripCost;

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
        $trips = Trip::all()->where('program_id',null);
        $num = 0;
        return view('program.create',compact('repository','trips','num'));
        //je view te repository field gulo lagbe shei view te  repository pass korte hobe
    }

    public function index()
    {
        $repository = $this->repository;
        $programs = Program::all();
        $i=1;
        return view('program.index',compact('programs','i','repository'));
    }

    public function store(ProgramRequest $request)
    {
        $query = DB::select(DB::Raw("SHOW TABLE STATUS LIKE 'programs'"));
        $query = $query[0]->Auto_increment;

        $request['program_id'] = $query;
        Program::query()->create($request->all());

        //dd($request->all());
        $request['paid'] = $request->get('adv_rent');
        Income::query()->create($request->all());
        $this->trips($request->all(),$query);
        return redirect('programs');
    }

    public function edit($id)
    {
        $repository = $this->repository;
        $trips = Trip::all()->where('program_id',$id);
        $num = 1;
        $program = Program::query()->findOrFail($id);
        return view('program.edit',compact('program','trips','num','repository'));
    }

    public function update($id, ProgramRequest $request)
    {
        $program = Program::query()->findOrFail($id);
        $program->update($request->all());

        $ids = Trip::all()->whereIn('program_id',$id)->pluck('id');
        foreach($ids as $id){
            $trip = Trip::query()->findOrFail($id);
            $trip->delete();
        }

        //dd($id);
        $this->trips($request->all(),$id);

       // $request['program_id'] = $id;
        $request['paid'] = $request->get('adv_rent');
        Income::query()->update($request->only('rent','paid','due_rent'));

        Session::flash('success','"'.$program->name.'" is updated!');
        return redirect('programs');
    }

    public function destroy($id)
    {
        $program = Program::query()->findOrFail($id);
        //$income = Income::query()->findOrFail($id);
        $program->delete();
        //$income->delete();
        Session::flash('success','"'.$program->name.'" has been deleted successfully!');
        return redirect('programs');
    }


    public function programReport(){
        $tripCosts = TripCost::all();
        $repository = $this->repository;
        return view('program.programReport',compact('tripCosts','repository'));
    }

    public function driverReceipt(){
        $tripCosts = TripCost::all();
        $repository = $this->repository;
        return view('program.driverReceipt',compact('tripCosts','repository'));
    }

    public function rotation()
    {
        $date = Input::has('date') ? Carbon::parse(Input::get('date')) : Carbon::now();
        $repository = $this->repository;
        $vehicles = Vehicle::all();
        return view('program.rotation',compact('vehicles','repository','date'));
    }

    public function dailyReport()
    {
        $date = Input::has('date') ? Carbon::parse(Input::get('date')) : Carbon::now();
        //$repository = $this->repository;
        $programs = Program::query()->where('date',$date)->get();
//        dd($programs);
//        query()->whereDate('date','=',$date);
        return view('program.dailyReport',compact('programs','date'));
    }

    public function trips($request,$query)
    {
        //$query = DB::select(DB::Raw("SHOW TABLE STATUS LIKE 'invoices'"));
        //dd($request);
        $keys = preg_grep('/^driver_id[0-9]/',array_keys($request));
//        dd($keys);
        foreach($keys as $key){
            //dd($key);
            preg_match('!\d+!',$key,$number);
//            dd($number);
            foreach($number as $num){
//                dd($num);
                $data = [
                    'program_id' => $query,
                    'vehicle_id' => $request['vehicle_id'.$num],
                    'driver_id' => $request['driver_id'.$num],
                    'driver_adv' => $request['driver_adv'.$num],
                    'd_a_fix' => $request['d_a_fix'.$num],
                    'extra_adv' => $request['extra_adv'.$num],
                    'loading' => $request['loading'.$num],
                    'unloading' => $request['unloading'.$num],
                    'product' => $request['product'.$num],
                    'emp_container' => $request['emp_container'.$num],
                    'fuel' => $request['fuel'.$num]
                ];
                //dd($data);
                Trip::query()->create($data);
            }
        }
    }

    public function dailyIncomeReport()
    {
        $date = Input::has('date') ? Carbon::parse(Input::get('date')) : Carbon::now();
        $incomes = Income::query()->where('date',$date)->get();
        $i = 1;
        return view('program.dailyIncomeReport',compact('i','incomes','date'));
    }

    public function show($id){
        $programs = Program::query()->findOrFail($id);
        return view('program.show',compact('programs'));
    }
}