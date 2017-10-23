<?php


namespace App\Repositories;

use App\Brand;
use App\Category;
use App\Parts;
use App\ProductBrand;
use App\Supplier;
use App\Vehicle;

class PurchaseRepository {

    public function categories(){
        return Category::all()->pluck('name','id');
    }

    public function brands()
    {
        return ProductBrand::all()->pluck('name','id');
    }

    public function parts()
    {
        return Parts::all()->pluck('name','id');
    }

    public function suppliers()
    {
        return Supplier::all()->pluck('supplier_name','id');
    }

    public function vehicles()
    {
        return Vehicle::all()->pluck('vehicleNo','id');
    }
}