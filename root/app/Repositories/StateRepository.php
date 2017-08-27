<?php
namespace App\Repositories;

use App\State;

class StateRepository {

    public function states(){
        return State::all()->pluck('name','id');
    }

}