<?php

namespace App\Http\Controllers;

use App\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * @var ProductRepository
     */
    private $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    public function index()
    {
        $products = Product::all();
        $repository = $this->repository;
        return view('product.index',compact('repository','products'));
    }

    public function create()
    {
        $repository = $this->repository;
        return view('product.create',compact('repository'));
    }

    public function store(Request $request)
    {
        Product::query()->create($request->all());
        Session::flash('success','"'.$request->name.'" has been added!');
        return redirect('products');
    }

    public function edit($id)
    {
        $product = Product::query()->findOrFail($id);
        $repository = $this->repository;
        return view('product.edit',compact('product','repository'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::query()->findOrFail($id);
        $product->update($request->all());
        Session::flash('success','"'.$product->name.'" has been updated!');
        return redirect('products');
    }

    public function destroy($id)
    {
        $product = Product::query()->findOrFail($id);
        $product->delete();
        Session::flash('success','"'.$product->name.'" has been deleted!');
        return redirect('products');
    }
}
