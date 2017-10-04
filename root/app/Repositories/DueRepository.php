<?php
namespace App\Repositories;

use App\Party;
use App\Program;

class DueRepository {

    public function programs(){
        return Program::all()->pluck('serial','id');
    }

    public function parties(){
        return Party::all()->pluck('name','id');
    }

}