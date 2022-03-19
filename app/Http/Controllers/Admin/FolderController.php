<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\FolderResource;
use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class FolderController extends Controller
{
    public function index(Folder $folder){
        return view('admin.folders.show', compact('folder'));

    }
    public function show(Folder $folder){

        return view('admin.folders.show', compact('folder'));
    }

    public function createFolder(){

        $folderName = request('folderName');
        $currentFolder = request('currentFolder');
        $folder = [];

         if($currentFolder)
        {

            $tree = [];

            $child = Folder::find($currentFolder);

            while($child){
                $tree[] = $child->name;
                $child = $child->getParentFolders;
            }
            if (Storage::disk('uploads')->exists(implode('/',array_reverse($tree)).'/'.$folderName)) {
                return response()->json('folder exists', 200);
            }else{
                Storage::disk('uploads')->makeDirectory(implode('/',array_reverse($tree)).'/'.$folderName);
                $folder = Folder::create([
                    'name'=> $folderName,
                    'parent_id'=> $currentFolder
                ]);
            }
        }else{
            if (Storage::disk('uploads')->exists($folderName)) {
                return response()->json('folder exists', 200);
            }else{
                Storage::disk('uploads')->makeDirectory($folderName);
                $folder = Folder::create([
                    'name'=> $folderName,
                    'parent_id'=> 0
                ]);
            }
        }

        return response()->json($folder);
    }

    public function deleteFolder(){
        $folderId = request('folderId');
        $folder = Folder::find($folderId);
        $folderName = $folder->name;
        $folder->delete();
        Storage::disk('uploads')->deleteDirectory($folderName);
        return response()->json('success', 200);
    }
}
