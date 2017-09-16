<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Owner extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','f_name', 'address','nid_no', 'email', 'mobile_no'];
}
