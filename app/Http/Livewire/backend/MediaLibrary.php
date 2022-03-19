<?php

namespace App\Http\Livewire\backend;

use App\Models\File;
use App\Models\Folder;
use Livewire\Component;

class MediaLibrary extends Component
{

    public $folderId;
    public $previousFolderId;

    public $tree = [];

    public $breadcrumb = [
        ['name'=> 'پوشه اصلی', 'id'=>0]
    ];

    public function  mount($folderId = 0){
        $this->folderId = $folderId;
    }

    public function goBack(){
        $this->folderId = $this->previousFolderId;
    }

    public function getAllParents(){
        $child = Folder::find(request('folder_id'));

        while($child){
            $this->tree[] = $child->name;
            $child = $child->getParentFolders;
        }
    }

    public function changeFolder($folder_id){
        $folder = Folder::find($folder_id);
        $this->breadcrumb[] = [
            'name'=> $folder->name,
            'id'=> $folder->id,
        ];
        $this->previousFolderId = $this->folderId;
        $this->folderId = $folder_id;
    }

    public function render()
    {
        return view('livewire.admin.media-library',[
            'folders' => Folder::where('parent_id', $this->folderId)->get(),
            'files' => File::where('folder_id', $this->folderId)->get(),
        ]);
    }
}
