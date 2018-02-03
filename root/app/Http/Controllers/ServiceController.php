<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\ServiceRequest;
use App\Parts;
use App\PartsUsed;
use App\Problem;
use App\Repositories\ServiceRepository;
use App\Service;
use App\Stock;
use App\UsedPart;
use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    private $repository;

    public function __construct(ServiceRepository $repository){
        $this->middleware('auth');
        $this->repository=$repository;
        //ProgramRepository is the class name & also the file name
    }

    public function create(){
        $repository = $this->repository;
        $problems = Parts::all()->where('category_id',null);
        $num =1;
        return view('service.create',compact('repository','problems','num'));
    }

    public function index()
    {
        $i=1;
        $services = Service::all();
        return view('service.index',compact('i','services','repository'));
    }

    public function store(ServiceRequest $request)
    {

        $query = DB::select(DB::Raw("SHOW TABLE STATUS LIKE 'services'"));
        $query = $query[0]->Auto_increment;
//        dd($query);
        $id = $request['problem_id'];

        $problem = Problem::query()->findOrFail($id);
        $request['problem_status'] = 0;
        $problem->update($request->only(['problem_status']));

        $request['service_id'] = $query;
        Service::query()->create($request->all());

//        dd($request->all());
        $this->trips($request->all(),$query);

        return redirect('services');
    }


    public function edit($id)
    {
        $repository = $this->repository;
        $tripCosts = Service::all();
        $tripCost = Service::query()->findOrFail($id);
        return view('service.edit',compact('tripCost','tripCosts','repository'));
    }

    public function update($id, ServiceRequest $request)
    {
        $service = Service::query()->findOrFail($id);
        Session::flash('success','"'.$service->name.'" is updated!');
        $service->update($request->all());
        return redirect('services');
    }

    public function destroy($id)
    {
        $tripCost = Service::query()->findOrFail($id);
        $tripCost->delete();
        Session::flash('success','"'.$tripCost->name.'" has been deleted successfully!');
        return redirect('tripCosts');
    }

    public function problemLoad(Request $request)
    {
        $vehicle = $request->get('vehicle');
        $problems = Problem::query()->where('vehicle_id',$vehicle)->where('problem_status',1)->get();
        $combo='<option>'.null.'<option>';
        foreach($problems as $problem){
            $combo.= '<option value="'.$problem->id.'">'.$problem->problem.'</option>';
        }
        $combo.='';
        return $combo;
    }

//    public function partsLoad(Request $request)
//    {
//        $category = $request->get('category');
//        $parts = Parts::query()->where('category_id',$category)->get();
//        $combo='<option>'.null.'<option>';
//        foreach($parts as $part){
//            $combo.= '<option value="'.$part->id.'">'.$part->name.'</option>';
//        }
//        $combo.='';
//        return $combo;
//    }


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
                    'service_id' => $request['service_id'.null],
                    'employee_id' => $request['employee_id'.$num],
                    'product_id' => $request['product_id'.$num],
                    'quantity' => $request['quantity'.$num],
                ];
//                dd($data);
                UsedPart::query()->create($data);


                $stock = Stock::query()->where('product_id',$request['product_id'.$num])->first();

                $data = $stock->quantity - $request['quantity'.$num];
                $stock->update(['quantity'=>$data]);
            }
        }
    }

}
