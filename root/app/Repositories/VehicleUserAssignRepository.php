<?php
/**
 * Created by PhpStorm.
 * User: Personal
 * Date: 11/21/2017
 * Time: 3:46 PM
 */

namespace App\Repositories;

use App\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleUserAssignRepository {

    use SoftDeletes;

    public function users()
    {
        return User::all()->pluck('name','id');
    }
}