<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','brand_id','category_id','parts_id','unit_id','description'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function stock()
    {
       return $this->hasOne(Stock::class);
    }

    public function brand()
    {
        return $this->belongsTo(ProductBrand::class);
    }

    public function part()
    {
        return $this->belongsTo(Parts::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
