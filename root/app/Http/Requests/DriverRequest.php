<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DriverRequest extends FormRequest
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
            'name'          => 'required|max:255',
            'f_name'        => 'max:255',
            'm_name'        => 'max:255',
            'pre_address'   => 'required|max:255',
            'perm_address'  => 'required|max:255',
            'nid'           => 'required|max:25',
            'd_licence'     => 'required|max:25',
            'image'         => 'mimes:jpeg,bmp,png|max:2000',
            'mobile'        => 'required|max:11',
            'ref_name'      => 'required|max:70',
            'app_person'    => 'required|max:70'
        ];
    }
}
