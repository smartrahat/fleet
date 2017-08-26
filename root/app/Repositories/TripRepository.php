<?php
namespace App\Repositories;

use App\Program;

class TripRepository {

    public function programs(){
        return Program::all()->pluck('serial','id');
    }
}