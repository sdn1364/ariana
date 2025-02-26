<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AwardRequest extends FormRequest
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

            $rules[getLocale($lang) . '_content'] = ['required', ' string '];

        }

        $rules['date'] = 'nullable';

        return $rules;
    }
}
