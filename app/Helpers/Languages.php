<?php

use App\Services\LanguageService as LanguageServices;

function getLocale($id){
    return LanguageServices::getLocale($id);
}

function getLanguageName($id){
    return LanguageServices::getLanguageName($id);
}
function getAllLanguages(){
    return LanguageServices::getAllLanguages();
}
