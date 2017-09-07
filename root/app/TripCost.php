<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TripCost extends Model
{
    protected $fillable = ['date','program_id','driver_salary','helper_salary','fuel_cost','driver_allow',
        'helper_allow','labour','toll','bridge','scale','wheel','donation','container','port_gate','driver_cost','other'];

    /**
     * A trip cost is belongs to a program
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
