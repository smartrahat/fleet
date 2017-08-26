<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = ['date','program_id','loading','unloading','product','emp_container','weight','fuel', 'rent','driver_adv'];
}
