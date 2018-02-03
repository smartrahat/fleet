<?php

namespace App\Http\Controllers;

use App\Parts;
use App\Product;
use App\Repositories\ProductRepository;
use App\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $query = DB::select(DB::Raw("SHOW TABLE STATUS LIKE 'products'"));
        $query = $query[0]->Auto_increment;

        $request['product_id'] = $query;
        Product::query()->create($request->all());

        //dd($request->all());
//        $request['paid'] = $request->get('adv_rent');
        Stock::query()->create($request->all());

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


        public function partsLoad(Request $request)
    {
        $category = $request->get('category');
        $parts = Parts::query()->where('category_id',$category)->get();
        $combo='<option>'.null.'<option>';
        foreach($parts as $part){
            $combo.= '<option value="'.$part->id.'">'.$part->name.'</option>';
        }
        $combo.='';
        return $combo;
    }

}
