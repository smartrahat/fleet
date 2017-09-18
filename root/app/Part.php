<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Part extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','description'];

    /**
     * A part has many spare parts
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function spareParts()
    {
        return $this->hasMany(SparePart::class);
    }
}
