<?php

namespace App\Http\Requests;

use App\Models\Language;
use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends FormRequest
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

            $rules[getLocale($lang) . '_question'] = ['required', ' string ', ' max:125'];
            $rules[getLocale($lang) . '_answer'] = ['required', ' string ', ' max:500'];

        }

        $rules['service_id'] = 'required';

        return $rules;
    }
}
