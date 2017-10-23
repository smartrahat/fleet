<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = ['date','supplier_id','mobile','voucher','vehicle_id','category_id','parts_id','brand_id','quantity','rate','total','advance','due'];


    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
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


