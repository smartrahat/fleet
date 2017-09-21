<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehiclesRequest extends FormRequest
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
            //'name'              =>'required|max:70',
            //'brand_id'          =>'required',
            //'type_id'           =>'required',
            //'owner_id'          =>'required',
            //'roadPermitStart'   =>'required',
            //'roadPermitEnd'     =>'required',
            //'taxTokenStart'     =>'required',
            //'taxTokenEnd'       =>'required',
            //'insuranceStart'    =>'required',
            //'insuranceEnd'      =>'required',
            //'fitnessStart'      =>'required',
            //'fitnessEnd'        =>'required',
            //'regCertStart'      =>'required',
            //'regCertEnd'        =>'required',
            //'vehicleNo'         =>'required',
            //'engineNo'          =>'required',
            //'chasesNo'          =>'required',
            //'mobile'            =>'required',
            //'status_id'         =>'required',
            //'image'             => 'mimes:jpeg,bmp,png|max:2000',
        ];
    }
}
