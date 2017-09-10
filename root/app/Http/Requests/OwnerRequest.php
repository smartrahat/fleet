<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OwnerRequest extends FormRequest
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
            'name'      =>  'required|max:255',
            'f_name'    =>  'required|max:255',
            'address'   =>  'required|max:255',
            'nid_no'    =>  'required|max:25',
            'email'     =>  'required|max:255',
            'mobile_no' =>  'required|max:11'
        ];
    }
}
