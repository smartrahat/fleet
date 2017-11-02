<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = ['date','supplier_id','mobile','voucher','total','advance','due'];


    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
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

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }

    public function purchasedProducts()
    {
        return $this->hasMany(PurchasedProduct::class);
    }

}


