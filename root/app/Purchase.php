<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = ['invoice_id','category_id','parts_id','brand_id','quantity','rate','p_total'];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function parts()
    {
        return $this->belongsTo(Parts::class);
    }

    public function brand()
    {
        return $this->belongsTo(ProductBrand::class);
    }
}
