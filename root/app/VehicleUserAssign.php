<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleUserAssign extends Model
{
    protected $fillable = ['user_id','vehicle_id','owner_id','status_id'];
}
