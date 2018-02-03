<?php
namespace App\Repositories;

use App\Category;
use App\Employee;
use App\Parts;
use App\Problem;
use App\Product;
use App\Stock;
use App\Vehicle;
use Illuminate\Support\Facades\DB;

class ServiceRepository {

    public function vehicles(){
        return Vehicle::all()->where('status_id',1)->pluck('vehicleNo','id');
    }

    public function employees(){
        return Employee::all()->where('designation_id',5)->pluck('name','id');
    }

    public function categories(){
        return Category::all()->pluck('name','id');
    }

    public function products(){
        $prods = Product::all();
        $list = [];
        foreach($prods as $prod){
            $stock = Stock::query()->where('product_id',$prod->id)->first();
            if($stock->quantity > 0){
                $list[] = $prod->id;
            }
        }

        return $prods->whereIn('id',$list)->pluck('name','id');


//        return Product::all()->pluck('name', 'id');
    }

    public function problems(){
        return Problem::query()->where('vehicle_id','');
    }
}