<?php

namespace App\Http\Controllers;


use App\Invoice;
use App\Purchase;
use App\Repositories\InvoiceRepository;
use Illuminate\Support\Facades\Session;

class PurchaseController extends Controller
{
    public function __construct(InvoiceRepository $repository)
    {
        $this->middleware('auth');
        $this->repository=$repository;
    }

    public function index()
    {
        $repository = $this->repository;
        $purchases = Purchase::all();
        $i=1;
        return view('program.index',compact('purchases','i','repository'));
    }

    public function show($id)
    {
        $invoice = Invoice::query()->findOrFail($id);
        $invoice = $invoice->purchases;
        $total = Purchase::query()->where('invoice_id',$id)->sum('p_total');
        return view('invoice.show',compact('invoice','total'));
    }


    public function destroy($id)
    {
        $purchase = Purchase::query()->findOrFail($id);
        //$income = Income::query()->findOrFail($id);
        $purchase->delete();
        //$income->delete();
        Session::flash('success','"'.$purchase->name.'" has been deleted successfully!');
        return redirect('programs');
    }
}