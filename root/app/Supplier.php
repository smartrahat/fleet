<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use SoftDeletes;
    protected $fillable = ['supplier_name','name','address','mobile','email'];


    public function purchase()
    {
        return $this->belongsTo(Purchase::class);
    }
}
