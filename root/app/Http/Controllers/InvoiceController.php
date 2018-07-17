<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvoiceRequest;

use App\Invoice;
use App\Product;
use App\Purchase;
use App\Repositories\InvoiceRepository;
use App\Stock;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class InvoiceController extends Controller
{
    private $repository;

    public function __construct(InvoiceRepository $repository){
        $this->middleware('auth');
        $this->repository=$repository;
        //programRepository is the class name & also the file name
    }

    public function create()
    {
        $repository = $this->repository;
        $products = [];
        $num = 0;
        return view('invoice.create', compact('repository', 'products', 'num'));
    }

    public function index()
    {
//        $date = Input::has('date') ? Carbon::parse(Input::get('date')) : Carbon::now();

        if(Input::has('date')){
            $date = Carbon::parse(Input::get('date'));
            $invoices = Invoice::query()->where('date',$date)->get();
            $total = Invoice::query()->where('date',$date)->sum('total');
            $paid = Invoice::query()->where('date',$date)->sum('advance');
            $due = Invoice::query()->where('date',$date)->sum('due');
        }else{
            $invoices = Invoice::all();
            $total = Invoice::query()->sum('total');
            $paid = Invoice::query()->sum('advance');
            $due = Invoice::query()->sum('due');
        }
        return view('invoice.index',compact('invoices','date','total','paid','due'));
    }

    public function store(InvoiceRequest $request)
    {
        $query = DB::select(DB::Raw("SHOW TABLE STATUS LIKE 'invoices'"));
        $query = $query[0]->Auto_increment;
        $request['invoice_id'] = $query;
        Invoice::query()->create($request->all());

        $this->goods($request->all(),$query);
        return redirect('invoices');
    }

    public function edit($id)
    {
        $repository = $this->repository;
        $products = Purchase::all()->where('invoice_id',$id);
        $num = 1;
        $invoice = Invoice::query()->findOrFail($id);
        return view('invoice.edit',compact('products','invoice','num','repository'));
    }

    public function update($id, InvoiceRequest $request)
    {
        $invoice = Invoice::query()->findOrFail($id);
        $invoice->update($request->all());

        $ids = Purchase::all()->whereIn('program_id',$id)->pluck('id');
        foreach($ids as $tid){
            $purchase = Purchase::query()->findOrFail($tid);
            $purchase->delete();
        }

        //dd($id);
        $this->goods($request->all(),$id);

        Session::flash('success','"'.$invoice->name.'" is updated!');
        return redirect('invoices');
    }

    public function destroy($id)
    {
        $invoice = Invoice::query()->findOrFail($id);
        $invoice->delete();
        Session::flash('success','"'.$invoice->name.'" has been deleted successfully!');
        return redirect('invoices');
    }


//    public function dailyReport()
//    {
//        $date = Input::has('date') ? Carbon::parse(Input::get('date')) : Carbon::now();
//
//        $invoices = Invoice::query()->where('date',$date)->get();
//        $total = Invoice::query()->where('date',$date)->sum('total');
//        $paid = Invoice::query()->where('date',$date)->sum('advance');
//        $due = Invoice::query()->where('date',$date)->sum('due');
//
//        return view('invoice.index',compact('invoices','date','total','paid','due'));
//    }





    public function goods($request,$query)
    {
        //$query = DB::select(DB::Raw("SHOW TABLE STATUS LIKE 'invoices'"));
        //dd($request);
        $keys = preg_grep('/^product_id[0-9]/',array_keys($request));
//        dd($keys);
        foreach($keys as $key){
//            dd($key);
            preg_match('!\d+!',$key,$number);
//            dd($number);
            foreach($number as $num){
//                dd($num);
                $data = [
                    'invoice_id' => $query,
                    'product_id' => $request['product_id'.$num],
                    'quantity' => $request['quantity'.$num],
                    'rate' => $request['rate'.$num],
                    'p_total' => $request['p_total'.$num]
                ];
//                dd($data);
                Purchase::query()->create($data);

                $stock = Stock::query()->where('product_id',$request['product_id'.$num])->first();
                $data = $stock->quantity + $request['quantity'.$num];
                $stock->update(['quantity'=>$data]);
            }
        }
    }

    public function purchaseRecord(){
        $repository = $this->repository;
        $products = Product::all();
        if(Input::has('product_id')){
            $employees = Input::get('product_id');
            $record = Purchase::query()->where('product_id',$products)->get()->take(5);

        }else{
            $products = [];
            $employees = null;
        }

//        dd($employees);

        return view('vehicle_user_assign.index',compact('products','vehicle','repository','employees'));
    }

    public function purchaseHistory(){
        $repository = $this->repository;
        $pid = Input::has('product_id');
        if($pid){
            $pid = Input::get('product_id');
            $purchases = Purchase::query()->where('product_id',$pid)->get()->sortByDesc('id')->take(5);
//            dd($purchases->date);
        }else{
            $purchases = Purchase::all();
        }
//        dd($purchases);
        $num=1;
        return view('invoice.purchaseHistory',compact('num','repository','purchases','pid'));
    }

}
