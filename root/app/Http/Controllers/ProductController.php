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

    public function store(Request $request)
    {
        Product::query()->create($request->all());
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
