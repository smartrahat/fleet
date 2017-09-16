<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use SoftDeletes;

    protected $dates= ['roadPermitStart','roadPermitEnd','taxTokenStart','taxTokenEnd',
        'insuranceStart', 'insuranceEnd','fitnessStart','fitnessEnd',
        'regCertStart','regCertEnd'];

    protected $fillable = [
        'name', 'brand_id', 'type_id', 'owner_id',
        'roadPermitStart','roadPermitEnd','taxTokenStart','taxTokenEnd',
        'insuranceStart', 'insuranceEnd','fitnessStart','fitnessEnd',
        'regCertStart','regCertEnd','vehicleNo','engineNo'
        ,'chasesNo','status_id','mobile','image'
    ];


    /**
     * A vehicle is belongs to a brand
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * A vehicle is belongs to a type
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    /**
     * A vehicle is belongs to a Owner
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    /**
     * A vehicle is belongs to a status
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function programs(){
        return $this->hasMany(Program::class);
    }

    public function getInsuranceStartAttribute($date)
    {
        return Carbon::parse($date)->format('Y-m-d');
    }

    public function getInsuranceEndAttribute($date)
    {
        return Carbon::parse($date)->format('Y-m-d');
    }

    public function getFitnessEndAttribute($date)
    {
        return Carbon::parse($date)->format('Y-m-d');
    }
}
