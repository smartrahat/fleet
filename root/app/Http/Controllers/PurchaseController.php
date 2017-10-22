<?php

namespace App\Http\Controllers;

use App\Http\Requests\PurchaseRequest;
use App\Purchase;
use App\Repositories\PurchaseRepository;

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

    public function index()
    {
        $purchases = Purchase::all();
        return view('purchase.index',compact('purchases'));
    }

    public function store(PurchaseRequest $request)
    {
        //dd($request->all());
        Purchase::query()->create($request->all());
        return redirect('purchases');
    }

    public function edit($id)
    {
        $purchase = Purchase::query()->findOrFail($id);
        return view('purchase.edit',compact('purchase'));
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
