<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::all();
        return view('stock.index',compact('stocks'));

    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        $stock = Stock::query()->findOrFail($id);
        $stock->delete();
        Session::flash('success','"'.$stock->name.'" has been deleted!');
        return redirect('stocks');
    }
}
