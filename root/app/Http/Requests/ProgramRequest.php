<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgramRequest extends FormRequest
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
            'party_id'      =>'required',
            'employee_id'   =>'required',
            'date'          =>'required',
            'serial'        =>'required',
            'adv_rent'      =>'required',
            'due_rent'      =>'required',
            'rent'          =>'required'
        ];
    }
}
