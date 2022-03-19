<?php

namespace App\Http\Requests;

use App\Models\Language;
use Illuminate\Foundation\Http\FormRequest;

class TenderRequest extends FormRequest
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
        foreach($languages as $lang){
            $rules[getLocale($lang) . '_title'] = 'required';
            $rules[getLocale($lang) . '_brief'] = 'required';
            $rules[getLocale($lang) . '_roles'] = 'required';
        }
        $rules['code'] = 'required';
        $rules['deadline'] = 'required';
        $rules['progress'] = 'required';
        $rules['sector_id']='required';
        $rules['tags'] = 'required';
        $rules['type'] = 'required';
        $rules['document'] = 'nullable';

        return $rules;
    }
}
