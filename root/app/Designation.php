<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Designation extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','description'];

    public function designations()
    {
        return $this->belongsTo(Designation::class);
    }
}
