<?php

namespace App\Http\Controllers;

use App\Http\Requests\PurchaseRequest;
use App\Purchase;
use App\Repositories\PurchaseRepository;
use App\Stock;
use Illuminate\Support\Facades\Session;

class PurchaseController extends Controller
{
    private $repository;

    public function __construct(PurchaseRepository $repository){
        $this->middleware('auth');
        $this->repository=$repository;
        //programRepository is the class name & also the file name
    }

    public function create(){
        $repository = $this->repository;
        return view('purchase.create',compact('repository'));
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
        //dd($request->all());
        Purchase::query()->create($request->all());
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
}
