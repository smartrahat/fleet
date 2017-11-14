<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use SoftDeletes;
    protected $fillable = ['date','employee_id','supplier_id','voucher','total','advance','due'];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }

    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }
}
