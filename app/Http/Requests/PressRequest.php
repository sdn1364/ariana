<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PressRequest extends FormRequest
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

        foreach (getAllLanguages() as $lang) {
            $rules[getLocale($lang).'_title'] = 'required';
            $rules[getLocale($lang).'_content'] = 'required';
        }
        $rules['tags'] = 'required';
        $rules['subject'] = 'required';
        return $rules;
    }
}
