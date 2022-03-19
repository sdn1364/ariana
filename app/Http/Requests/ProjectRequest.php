<?php

namespace App\Http\Requests;

use App\Models\Language;
use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
        foreach(getAllLanguages() as $lang){
            $rules[getLocale($lang) . '_title'] = ['required', ' string '];
            $rules[getLocale($lang) . '_background'] = ['required', ' string'];
            $rules[getLocale($lang) . '_roles'] = ['required', ' string'];
            $rules[getLocale($lang) . '_location'] = ['required', ' string'];
            $rules[getLocale($lang) . '_client'] = ['required'];
        }

        $rules['start_date'] = 'required | date';
        $rules['due_date'] = 'required | date';
        $rules['progress'] = 'required';
        $rules['lat'] = 'required';
        $rules['long'] = 'required';
        $rules['sector_id'] = 'required | integer';
        $rules['service_id'] = 'required | integer';
        $rules['brochure'] = 'nullable | file | mimes:pdf';

        return $rules;
    }
}
