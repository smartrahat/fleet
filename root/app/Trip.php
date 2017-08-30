<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = ['date','program_id','loading','unloading','product','emp_container','weight','fuel', 'rent','driver_adv'];

    /**
     * A trip is belongs to a program
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
