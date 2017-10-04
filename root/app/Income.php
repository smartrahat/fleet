<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $dates = ['date'];

    protected $fillable = ['party_id', 'program_id','date','rent','paid','due_rent'];

    public function party()
    {
        return $this->belongsTo(Party::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
