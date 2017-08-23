<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = ['name','f_name', 'address','nid_no', 'email', 'mobile_no'];
}
