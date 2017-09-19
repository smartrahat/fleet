<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trip extends Model
{
    use SoftDeletes;

    protected $fillable = ['program_id','loading','unloading','product','emp_container','weight','fuel', 'driver_adv',
        'driver_adv_fix','extra_adv'];

    /**
     * A trip is belongs to a program
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function tripCost()
    {
        return $this->belongsTo(TripCost::class);
    }
}
