<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = ['vehicle_id','driver_id','party_id','employee_id','serial'];
}
