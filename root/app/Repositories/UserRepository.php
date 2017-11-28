<?php
/**
 * Created by PhpStorm.
 * User: SMARTRAHAT
 * Date: 9/14/2017
 * Time: 3:20 PM
 */

namespace App\Repositories;


use App\Company;
use App\Role;

class UserRepository
{
    public function roles()
    {
        return Role::all()->pluck('name','id');
    }

    public function companies()
    {
        return Company::all()->pluck('name','id');
    }
}