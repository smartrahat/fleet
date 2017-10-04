<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Due extends Model
{
    protected $fillable = ['date','party_id','program_id','rent','adv_rent', ];
}
