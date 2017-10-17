<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupplierRequest;
use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SupplierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('supplier.create');
    }

    public function store(SupplierRequest $request)
    {
        Supplier::query()->create($request->all());
        return redirect('suppliers');
    }

    public function index(SupplierRequest $request)
    {
        $suppliers = Supplier::all();
        return view('supplier.index',compact('suppliers'));
    }

    public function edit($id)
    {
        $supplier = Supplier::query()->findOrFail($id);
        return view('supplier.edit',compact('supplier'));
    }

    public function update($id, SupplierRequest $request)
    {
        $supplier = Supplier::query()->findOrFail($id);
        $supplier->update($request->all());
        Session::flash('success','"'.$supplier->name.'" is updated!');
        return redirect('suppliers');
    }

    public function destroy($id)
    {
        $supplier = Supplier::query()->findOrFail($id);
        $supplier->delete();
        Session::flash('success','"'.$supplier->name.'" has been deleted successfully!');
        return redirect('suppliers');
    }
}
