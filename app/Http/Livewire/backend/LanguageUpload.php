<?php

namespace App\Http\Livewire\backend;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class LanguageUpload extends Component
{
    use WithFileUploads;

    public $lang = '';
    public $file = '';
    public $uploadingLocale;
    public $showUpload = false;
    public $buttonName = 'انتخاب فایل';
    public $canSubmit = false;

    protected $rules = [
        'file' => 'required | mimes:json'
    ];

    public function mount(){
        $this->showUpload = false;

    }

    public function updatedFile(){
        $this->buttonName = $this->file->getClientOriginalName();
        if(!empty($this->file)){
            $this->canSubmit = true;
        }
    }

    public function render()
    {
        return view('livewire.admin.language-upload');
    }

    public function uploadTranslation()
    {
        $this->validate();
        $this->file->storeAs('',$this->uploadingLocale.'.json', 'lang');
        $this->canSubmit = false;
        return redirect(request()->header('Referer'));


    }

    public function currentUploadingLocale($locale){
        $this->uploadingLocale = $locale;
        $this->showUpload = true;
    }
}
