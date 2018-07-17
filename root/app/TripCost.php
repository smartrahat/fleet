<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TripCost extends Model
{
    use SoftDeletes;
    protected $fillable = ['program_id','vehicle_id','driver_id','date','fuel_cost','driver_allow',
        'helper_allow','labour','toll','bridge','scale','wheel','donation','container','port_gate','other','total'];

    /**
     * A trip cost is belongs to a program
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

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
