<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = ['vehicleNo','category','parts','brand','quantity','rate','total','paid','due','shopName','shopMobile'];
}
