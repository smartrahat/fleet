<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvoiceRequest;
use App\Invoice;
use App\Purchase;
use App\Repositories\InvoiceRepository;
use Illuminate\Support\Facades\DB;
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

    public function index(InvoiceRequest $request)
    {
        $invoices = Invoice::all();
        $total = Invoice::query()->sum('total');
        $paid = Invoice::query()->sum('advance');
        $due = Invoice::query()->sum('due');
        return view('invoice.index',compact('invoices','total','paid','due'));
    }

    public function store(InvoiceRequest $request)
    {
        $query = DB::select(DB::Raw("SHOW TABLE STATUS LIKE 'invoices'"));
        $query = $query[0]->Auto_increment;
//        dd($query);
        $request['invoice_id'] = $query;
        Invoice::query()->create($request->all());

        $this->goods($request->all(),$query);
        return redirect('invoices');
    }

    public function edit($id)
    {
        $repository = $this->repository;
        $invoice = Invoice::query()->findOrFail($id);
        return view('invoice.edit',compact('invoice','repository'));
    }

    public function update($id, InvoiceRequest $request)
    {
        $invoice = Invoice::query()->findOrFail($id);
        $invoice->update($request->all());
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
                    'invoice_id' => $query,
                    'category_id' => $request['category_id'.$num],
                    'parts_id' => $request['parts_id'.$num],
                    'brand_id' => $request['brand_id'.$num],
                    'quantity' => $request['quantity'.$num],
                    'rate' => $request['rate'.$num],
                    'p_total' => $request['p_total'.$num]
                ];
//                dd($data);
                Purchase::query()->create($data);
            }
        }
    }

}
