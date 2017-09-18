<?php
/**
 * Created by PhpStorm.
 * User: SMARTRAHAT
 * Date: 9/18/2017
 * Time: 11:46 AM
 */

namespace App\Repositories;


use App\Part;

class SparePartRepository
{
    public function parts()
    {
        return Part::all()->pluck('name','id');
    }
}