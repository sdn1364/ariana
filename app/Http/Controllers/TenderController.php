<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TenderController extends Controller
{
    public function uploadFile()
    {
        $file = request()->file('file');
        $alias = $file->getClientOriginalName();
        $fileName= Str::random(80).'.'.$file->getClientOriginalExtension();

        $fileSize = $file->getSize();
        $fileMime = $file->getClientMimeType();

        return response()->json('success', 200);

    }

}
