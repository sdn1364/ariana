<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MediaController extends Controller
{
    public function index(): View
    {
        return view('admin.medias.index');
    }

    public function show()
    {
        
    }
}
