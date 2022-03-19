<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CareerRequest extends FormRequest
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
        $rules = [];

        foreach( getAllLanguages() as $lang){
            $rules[getLocale($lang) . '_title'] = 'required';
            $rules[getLocale($lang) . '_summary'] = 'required';
            $rules[getLocale($lang) . '_section'] = 'required';
            $rules[getLocale($lang) . '_location'] = 'required';
            $rules[getLocale($lang) . '_responsibilities'] = 'required';
            $rules[getLocale($lang) . '_requirements'] = 'required';
        }

        return $rules;
    }
}
