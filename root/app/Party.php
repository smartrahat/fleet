<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    protected $fillable = ['name','f_name', 'address','nid_no', 'email', 'mobile_no'];
}
