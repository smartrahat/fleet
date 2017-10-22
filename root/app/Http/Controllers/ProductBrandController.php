<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductBrandRequest;
use App\ProductBrand;
use Illuminate\Support\Facades\Session;

class ProductBrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $brands = ProductBrand::all();
        return view('productBrands.index',compact('brands'));
    }

    public function store(ProductBrandRequest $request)
    {
        ProductBrand::create($request->all());
        Session::flash('success','"'.$request->name.'" has been added!');
        return redirect('productBrands');
    }

    public function edit($id)
    {
        $brands = ProductBrand::all();
        $brand = ProductBrand::query()->findOrFail($id);
        return view('productBrands.edit',compact('brand','brands'));
    }

    public function update($id, ProductBrandRequest $request)
    {
        $brand = ProductBrand::query()->findOrFail($id);
        $brand->update($request->all());
        Session::flash('success','"'.$brand->name.'" is updated!');
        return redirect('productBrands');
    }

    public function destroy($id)
    {
        $brand = ProductBrand::query()->findOrFail($id);
        $brand->delete();
        Session::flash('success','"'.$brand->name.'" has been deleted successfully!');
        return redirect('productBrands');
    }
}
