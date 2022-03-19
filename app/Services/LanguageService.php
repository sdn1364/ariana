<?php

namespace App\Services;

use App\Models\Language;

class LanguageService
{

    static public function getAllLanguages(){
        return Language::all();
    }
    static public function getLocale($lang){
        return explode(',', $lang->language)[0];
    }

    Static public function getLanguageName($lang){
        return explode(',', $lang->language)[1];
    }
}
