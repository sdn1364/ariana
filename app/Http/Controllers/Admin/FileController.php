<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\FolderResource;
use App\Models\File;
use App\Models\Folder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileController extends Controller
{
    public function fileUpload()
    {
        $file = request()->file('file');
        $alias = $file->getClientOriginalName();
        $fileName= Str::random(80).'.'.$file->getClientOriginalExtension();

        $fileSize = $file->getSize();
        $fileMime = $file->getClientMimeType();

        if(request('folder_id') != 0){
            $tree = [];
            $child = Folder::find(request('folder_id'));

            while($child){
                $tree[] = $child->name;
                $child = $child->getParentFolders;
            }
            $file->storeAs(implode('/',array_reverse($tree)).'/',$fileName,'uploads');
            File::create([
                'folder_id' => request('folder_id'),
                'name'=> $fileName,
                'alias'=> $file->getClientOriginalName(),
                'mime'=>$fileMime,
                'size'=> $fileSize
            ]);
        }else{

            $file->storeAs('/',$fileName,'uploads');
            File::create([
                'folder_id' => 0,
                'name'=> $fileName,
                'alias'=> $file->getClientOriginalName(),
                'mime'=>$fileMime,
                'size'=> $fileSize
            ]);
        }

        return response()->json('success', 200);
    }

    public function uploadingFile()
    {
        $file = request()->file('file');
        $fileName = $file->store('temp');
        return response()->json($fileName, 200);

    }

    public function deleteUploaded()
    {

    }
}
