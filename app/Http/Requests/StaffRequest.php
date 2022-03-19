<?php

namespace App\Http\Requests;

use App\Models\Language;
use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
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

        foreach ($languages as $lang) {

            $rules[getLocale($lang) . '_name'] = ['required', ' string '];
            $rules[getLocale($lang) . '_description'] = ['required', ' string '];
            $rules[getLocale($lang) . '_position'] = ['required', ' string '];

        }

        $rules['link'] = 'required';
        $rules['type'] = 'required';

        return $rules;
    }
}
