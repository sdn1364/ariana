<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageEnabled extends Controller
{
    public function getAllLanguage(){
        return Language::all();
    }
}
