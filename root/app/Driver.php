<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = ['name','f_name','m_name','pre_address','perm_address','nid','d_licence','image','mobile','ref_name',
                            'app_person'];
}
