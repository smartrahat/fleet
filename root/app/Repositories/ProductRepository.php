<?php
/**
 * Created by PhpStorm.
 * User: smartrahat
 * Date: 10/24/2017
 * Time: 3:44 PM
 */

namespace App\Repositories;


use App\Category;
use App\Parts;

class ProductRepository
{
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
        return [1=>'Piece',2=>'Litre'];
    }
}