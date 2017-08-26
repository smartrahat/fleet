<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = [  'date','program_id','loading','unloading','product','emp_container','weight','fuel',
        'fuel_cost','rent','driver_adv','driver_salary','helper_salary','driver_allow','helper_allow','labour',
        'toll','bridge','scale','wheel','donation','container','port_gate','driver_cost'];
}
