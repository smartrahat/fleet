<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','f_name','m_name','pre_address','perm_address', 'nid',
        'designation_id','image','mobile','email','join_date','app_person','dob','education'];
}
