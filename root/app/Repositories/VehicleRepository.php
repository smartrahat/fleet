<?php


namespace App\Repositories;

use App\Brand;
use App\owner;
use App\Status;
use App\Type;

class VehicleRepository {

    public function brands(){
        return Brand::all()->pluck('name','id');
    }

    public function types(){
        return Type::all()->pluck('name','id');
    }

    public function status(){
        return Status::all()->pluck('name','id');
    }
    
    public function owners(){
        return owner::all()->pluck('name','id');
    }

}