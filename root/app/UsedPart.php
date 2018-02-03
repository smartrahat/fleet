<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsedPart extends Model
{
    use SoftDeletes;

    protected $fillable = ['service_id','employee_id','product_id','quantity'];

    public function products(){
        return $this->belongsTo(Product::class);
    }

    public function employee(){
        return $this->belongsTo(Employee::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function services(){
        return $this->belongsTo(Service::class);
    }
}
