<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parts extends Model
{
    use SoftDeletes;

    protected $fillable = ['category_id','name','description',];


    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

}
