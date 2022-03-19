<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LanguageRequest;
use App\Models\Language;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Mcamara\LaravelLocalization\LaravelLocalization;

class LanguageController extends Controller
{

    public function index(): View
    {
        return view('admin.languages.index');
    }
}
