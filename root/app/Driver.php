<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Driver extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','f_name','m_name','pre_address','perm_address','nid','d_licence','image','mobile','ref_name',
        'app_person'];

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }


}
