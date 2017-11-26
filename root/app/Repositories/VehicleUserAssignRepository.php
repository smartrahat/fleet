<?php
/**
 * Created by PhpStorm.
 * User: Personal
 * Date: 11/21/2017
 * Time: 3:46 PM
 */

namespace App\Repositories;

use App\Employee;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleUserAssignRepository {

    use SoftDeletes;

    public function employees()
    {
        return Employee::all()->pluck('name','id');
    }
}