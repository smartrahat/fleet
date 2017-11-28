<?php
namespace App\Repositories;

use App\City;
use App\Country;
use App\Role;
use App\State;

class CompanyRepository {

    public function cities(){
        return City::all()->pluck('name','id');
    }

    public function states(){
        return State::all()->pluck('name','id');
    }

    public function countries(){
        return Country::all()->pluck('name','id');
    }

    public function roles()
    {
        return Role::all()->pluck('name','id');
    }

}