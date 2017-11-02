<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{
    use SoftDeletes;

    protected $dates = ['date'];

    protected $fillable = ['party_id','employee_id','date','serial','weight','rate','adv_rent','due_rent','rent'];

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

    public function tripCost(){
        return $this->hasOne(TripCost::class);
    }

    public function trips(){
        return $this->hasMany(Trip::class);
    }

    public function income(){
        return $this->belongsTo(Income::class);
    }
}