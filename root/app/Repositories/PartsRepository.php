<?php


namespace App\Repositories;

use App\Category;

class PartsRepository {

    public function categories(){
        return Category::all()->pluck('name','id');
    }
}