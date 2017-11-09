<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = ['invoice_id','product_id','quantity','rate','p_total'];

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

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
