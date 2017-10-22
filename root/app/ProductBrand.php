<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductBrand extends Model
{
    use SoftDeletes;

    protected $table = 'productBrands';

    protected $fillable = ['name','description'];
}
