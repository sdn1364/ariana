<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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

        foreach(getAllLanguages() as $lang){
            $rules[getLocale($lang).'_title'] = 'required | string';
            $rules[getLocale($lang).'_address'] = 'required | string';
            $rules[getLocale($lang).'_working_time'] = 'required | string';
        }
        $rules['lat']= 'required';
        $rules['long']= 'required';
        $rules['phone']= 'required';
        $rules['zip']= 'required';
        $rules['fax']= 'required';

        return $rules;
    }
}
