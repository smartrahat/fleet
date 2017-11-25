<?php


namespace App\Repositories;

use App\ExpenseCategory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExpenseRepository {

    use SoftDeletes;

    public function categories(){
        return ExpenseCategory::all()->pluck('name','id');
    }

}