<?php

namespace App\Http\Controllers;

use App\Problem;
use App\Repositories\ProblemRepository;
use App\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProblemController extends Controller
{
    private $repository;

    public function __construct(ProblemRepository $repository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    public function index()
    {
        $repository = $this->repository;
        $problems = Problem::all();
        $num =0;
        return view('problem.index',compact('repository','problems'));
    }

    public function create()
    {
        $repository = $this->repository;
        $problems = Problem::all()->where('vehicle_id',null);
        $num =1;
        return view('problem.create',compact('repository','problems','num'));
    }

    public function store(Request $request)
    {
        $query = DB::select(DB::Raw("SHOW TABLE STATUS LIKE 'problems'"));
        $query = $query[0]->Auto_increment;

        $this->trips($request->all(),$query);

        return redirect('problems');
    }

    public function edit($id)
    {
        $problem = Problem::query()->findOrFail($id);
        $repository = $this->repository;
        return view('problem.edit',compact('problem','repository'));
    }

    public function update(Request $request, $id)
    {
        $problem = Problem::query()->findOrFail($id);
        $problem->update($request->all());
        Session::flash('success','"'.$problem->name.'" has been updated!');
        return redirect('products');
    }

    public function destroy($id)
    {
        $problem = Problem::query()->findOrFail($id);
        $problem->delete();
        Session::flash('success','"'.$problem->name.'" has been deleted!');
        return redirect('problems');
    }

    public function trips($request,$query)
    {
        $keys = preg_grep('/^employee_id[0-9]/',array_keys($request));
//        dd($keys);
        foreach($keys as $key){
//            dd($key);
            preg_match('!\d+!',$key,$number);
//            dd($number);
            foreach($number as $num){
//                dd($num);
                $data = [
                    'date' => $request['date'],
                    'vehicle_id' => $request['vehicle_id'.null],
                    'employee_id' => $request['employee_id'.$num],
                    'category_id' => $request['category_id'.$num],
                    'problem' => $request['problem'.$num],
                ];
//                dd($data);
                Problem::query()->create($data);
            }
        }
    }
}