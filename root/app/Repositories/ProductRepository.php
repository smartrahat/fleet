<?php
/**
 * Created by PhpStorm.
 * User: smartrahat
 * Date: 10/24/2017
 * Time: 3:44 PM
 */

namespace App\Repositories;


use App\Brand;
use App\Category;
use App\Parts;
use App\Unit;

class ProductRepository
{
    public function brands()
    {
        return Brand::all()->pluck('name','id');
    }

    public function categories()
    {
        return Category::all()->pluck('name','id');
    }

    public function parts()
    {
        return Parts::all()->pluck('name','id');
    }

    public function units()
    {
        return Unit::all()->pluck('name','id');
    }
}