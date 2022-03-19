<?php

namespace App\Http\Middleware;

use App\Models\Language;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class Localization
{
    public $languages = [];
    public $locale = '';

    public function handle(Request $request, Closure $next)
    {

        if($request->segments()[0] == 'admin'){
            app()->setLocale('fa');
        }


        return $next($request);
    }

}
