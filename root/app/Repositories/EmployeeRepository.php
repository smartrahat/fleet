<?php


namespace App\Repositories;

use App\Designation;

class EmployeeRepository {

    public function designations(){
        return Designation::all()->pluck('name','id');
    }

    public function educations()
    {
        $qualification = ['JSC'=>'JSC','SSC'=>'SSC','HSC'=>'HSC','Degree Pass'=>'Degree Pass',
            'Honors'=>'Honors','Masters'=>'Masters'] ;

        return $qualification;
    }
}