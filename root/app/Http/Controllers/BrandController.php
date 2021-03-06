<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Http\Requests\BrandRequest;
use Illuminate\Support\Facades\Session;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $brands = Brand::all();
        return view('brands.index',compact('brands'));
    }

    public function store(BrandRequest $request)
    {
        Brand::query()->create($request->all());
        Session::flash('success','"'.$request->name.'" has been added!');
        return redirect('brands');
    }

    public function edit($id)
    {
        $brands = Brand::all();
        $brand = Brand::query()->findOrFail($id);
        return view('brands.edit',compact('brand','brands'));
    }

    public function update($id, BrandRequest $request)
    {
        $brand = Brand::query()->findOrFail($id);
        $brand->update($request->all());
        Session::flash('success','"'.$brand->name.'" is updated!');
        return redirect('brands');
    }

    public function destroy($id)
    {
        $brand = Brand::query()->findOrFail($id);
        $brand->delete();
        Session::flash('success','"'.$brand->name.'" has been deleted successfully!');
        return redirect('brands');
    }
}
