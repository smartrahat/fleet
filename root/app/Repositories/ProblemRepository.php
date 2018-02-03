<?php
namespace App\Repositories;

use App\Category;
use App\Employee;
use App\Vehicle;

class ProblemRepository {

    public function vehicles(){
        //return Vehicle::all()->pluck('vehicleNo','id');
        return Vehicle::query()->where('status_id',1)->pluck('vehicleNo','id');
    }

    public function employees()
    {
        return Employee::all()->where('designation_id',5)->pluck('name','id');
    }

    public function categories()
    {
        return Category::all()->pluck('name','id');
    }


}