<?php

namespace App\Http\Requests;

use App\Services\LanguageService;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Foundation\Http\FormRequest;

class SectorRequest extends FormRequest
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

            $rules[getLocale($lang) . '_title'] = ['required', ' string '];
            $rules[getLocale($lang) . '_content'] = ['required', ' string '];

        }

        $rules['parent_id'] = 'required';
        $rules['type'] = 'nullable';

        return $rules;
    }
}
