<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $suppliers = Supplier::all();
        return view('supplier.index',compact('suppliers'));
    }

    public function create()
    {
        return view('supplier.create');
    }
}
