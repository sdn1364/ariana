<?php

namespace App\Http\Livewire\backend;

use App\Models\File;
use App\Models\Folder;
use Livewire\Component;

class InPageMedia extends Component
{
    public $folderId = 0;
    public $previousFolderId;

    public $assignedFiles = [];

    public $selectedFiles;

    public $tree = [];
    public $multiSelect;


    public function mount($multiSelect = false)
    {
        $this->multiSelect = $multiSelect;
    }

    public function changeFolder($folder_id){
        $this->previousFolderId = $this->folderId;
        $this->folderId = $folder_id;
    }
    public function goBack(){
        $this->folderId = $this->previousFolderId;
    }

    public function addToFiles($file){
        $this->assignedFiles[] = $file;
    }

    public function addFiles(){
        $this->dispatchBrowserEvent('addFiles', ['files' => $this->assignedFiles]);
    }

    public function getBreadcrumb()
    {

    }

    public function render()
    {
        return view('livewire.admin.in-page-media',[
            'folders' => Folder::where('parent_id', $this->folderId)->get(),
            'files' => File::where('folder_id', $this->folderId)->get(),
        ]);
    }
}
