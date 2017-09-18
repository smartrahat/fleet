<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SparePart extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','part_id','description'];

    /**
     * A spare part is belongs to a part
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function part()
    {
        return $this->belongsTo(Part::class);
    }
}
