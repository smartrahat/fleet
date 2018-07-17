<?php
namespace App\Repositories;

use App\Driver;
use App\Program;
use App\TripCost;
use App\Vehicle;

class TripCostRepository {

    public function programs(){
        return Program::all()->pluck('serial','id');
    }

}