<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garage extends Model
{
    protected $fillable = ['name','mobile','address'];

    public function garageEntries()
    {
        return $this->hasMany(GarageEntry::class);
    }

    public function garageExits()
    {
        return $this->hasMany(GarageExit::class);
    }
}
