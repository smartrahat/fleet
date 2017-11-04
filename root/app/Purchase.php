<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = ['date','supplier_id','voucher','total','advance','due'];


    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }


}


