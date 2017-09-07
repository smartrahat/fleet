<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    protected $fillable = ['name','contact_person', 'address', 'email', 'mobile'];
}
