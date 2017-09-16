<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TripCost extends Model
{
    use SoftDeletes;

    protected $fillable = ['date','program_id','fuel_cost','driver_allow',
        'helper_allow','labour','toll','bridge','scale','wheel','donation','container','port_gate','other'];

    /**
     * A trip cost is belongs to a program
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
