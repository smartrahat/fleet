<?php

namespace App\Http\Controllers;

use App\Http\Requests\PurchaseRequest;
use App\Invoice;
use App\Product;
use App\Purchase;
use App\Repositories\PurchaseRepository;
use App\Stock;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PurchaseController extends Controller
{
    private $repository;

    public function __construct(PurchaseRepository $repository){
        $this->middleware('auth');
        $this->repository=$repository;
        //programRepository is the class name & also the file name
    }

    public function create()
    {
        $repository = $this->repository;
        $products = Invoice::all()->where('purchase_id', null);
        $num = 0;
        return view('purchase.create', compact('repository', 'products', 'num'));
    }

    public function index(PurchaseRequest $request)
    {
        $purchases = Purchase::all();
        $total = Purchase::query()->sum('total');
        $paid = Purchase::query()->sum('advance');
        $due = Purchase::query()->sum('due');
        return view('purchase.index',compact('purchases','total','paid','due'));
    }

    public function store(PurchaseRequest $request)
    {
        $query = DB::select(DB::Raw("SHOW TABLE STATUS LIKE 'purchases'"));
        $query = $query[0]->Auto_increment;
//        dd($query);
        $request['purchase_id'] = $query;
        Purchase::query()->create($request->all());

        $this->goods($request->all(),$query);
        return redirect('purchases');
    }

    public function edit($id)
    {
        $repository = $this->repository;
        $purchase = Purchase::query()->findOrFail($id);
        return view('purchase.edit',compact('purchase','repository'));
    }

    public function update($id, PurchaseRequest $request)
    {
        $purchase = Purchase::query()->findOrFail($id);
        $purchase->update($request->all());
        Session::flash('success','"'.$purchase->name.'" is updated!');
        return redirect('purchases');
    }

    public function destroy($id)
    {
        $purchase = Purchase::query()->findOrFail($id);
        $purchase->delete();
        Session::flash('success','"'.$purchase->name.'" has been deleted successfully!');
        return redirect('purchases');
    }

    public function goods($request,$query)
    {
        //$query = DB::select(DB::Raw("SHOW TABLE STATUS LIKE 'invoices'"));
        //dd($request);
        $keys = preg_grep('/^category_id[0-9]/',array_keys($request));
//        dd($keys);
        foreach($keys as $key){
//            dd($key);
            preg_match('!\d+!',$key,$number);
//            dd($number);
            foreach($number as $num){
//                dd($num);
                $data = [
                    'purchase_id' => $query,
                    'category_id' => $request['category_id'.$num],
                    'parts_id' => $request['parts_id'.$num],
                    'brand_id' => $request['brand_id'.$num],
                    'quantity' => $request['quantity'.$num],
                    'rate' => $request['rate'.$num],
                    'p_total' => $request['p_total'.$num]
                ];
//                dd($data);
                Invoice::query()->create($data);
            }
        }
    }

}
