<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name','f_name','m_name','pre_address','perm_address', 'nid',
        'designation','image','mobile','email','join_date','app_person'];
}
