<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TripCostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'program_id'        =>'required',
            'driver_salary'     =>'required',
            'helper_salary'     =>'required',
            'fuel_cost'         =>'required',
            'driver_allow'      =>'required',
            'helper_allow'      =>'required',
            'labour'            =>'required',
            'toll'              =>'required',
            'bridge'            =>'required',
            'scale'             =>'required',
            'wheel'             =>'required',
            'donation'          =>'required',
            'container'         =>'required',
            'port_gate'         =>'required',
            'driver_cost'       =>'required',
            'other'             =>'required',
        ];
    }
}
