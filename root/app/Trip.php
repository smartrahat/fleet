<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trip extends Model
{
    use SoftDeletes;
    protected $fillable = ['program_id','driver_id','vehicle_id','driver_adv','d_a_fix','extra_adv','loading','unloading','product','emp_container','fuel','trip_cancel','trip_status'];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }



}

