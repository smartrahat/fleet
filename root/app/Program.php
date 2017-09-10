<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = ['vehicle_id','driver_id','party_id','employee_id','date','serial','adv_rent','due_rent','rent'];

    public function party()
    {
        return $this->belongsTo(Party::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function trip(){
        return $this->hasMany(Trip::class);
    }

}
