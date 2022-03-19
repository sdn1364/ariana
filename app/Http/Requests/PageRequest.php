<?php

namespace App\Http\Requests;

use App\Models\Language;
use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
        $languages = Language::all();

        foreach( $languages as $lang){
            $rules[getLocale($lang) . '_title'] = 'required';
            $rules[getLocale($lang) . '_content']= 'required';
        }
        $rule['parent_id'] = 'required';

        return $rules;

    }
}
