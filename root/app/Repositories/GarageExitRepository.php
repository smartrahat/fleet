<?php
/**
 * Created by PhpStorm.
 * User: smartrahat
 * Date: 10/24/2017
 * Time: 3:44 PM
 */

namespace App\Repositories;

use App\Employee;
use App\Garage;
use App\Vehicle;

class GarageExitRepository
{
    public function vehicles()
    {
        return Vehicle::query()->where('status_id',1)->pluck('vehicleNo','id');
    }

    public function garages()
    {
        return Garage::query()->pluck('name','id');
    }
}