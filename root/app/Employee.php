<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;

    protected $fillable = ['rank','name','f_name','m_name','pre_address','perm_address', 'nid','designation_id','image','mobile','email','join_date','app_person','dob','education'];

    /**
     * An employee is belongs to a designation
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }

    public function usedParts()
    {
        return $this->belongsTo(UsedPart::class);
    }

}