<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trip extends Model
{
    use SoftDeletes;
    protected $fillable = ['program_id','driver_id','vehicle_id','driver_adv','d_a_fix','extra_adv'];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}

