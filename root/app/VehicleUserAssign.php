<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleUserAssign extends Model
{
    use SoftDeletes;

    protected $fillable = ['employee_id','vehicle_id','owner_id','status_id'];
}

