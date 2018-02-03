<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    protected $fillable = ['date','vehicle_id','problem_id'];

    public function vehicle(){
        return $this->belongsTo(Vehicle::class);
    }

    public function problem(){
        return $this->belongsTo(Problem::class);
    }

    public function usedParts()
    {
        return $this->hasMany(UsedPart::class);
    }

    /**
     * @return $this
     * Service belongs to Product & UsedParts Class
     */
    public function products()
    {
        return $this->belongsToMany(Product::class,'used_parts')->withPivot('employee_id','quantity');
    }
}
