<?php

namespace App\Http\Livewire\backend;

use App\Models\contents\Content;
use App\Models\Language;
use Livewire\Component;

class VendorContent extends Component
{

    public function save($formData)
    {

        $career = Content::where('page', 'vendor')->first();

        if(!empty($formData['file'])){
            if($career->hasMedia()){
                $career->getMedia()[0]->delete();
            }
            $career->addMedia(storage_path('app/').$formData['file'])->toMediaCollection();
        }

        $data = [];
        foreach(Language::all() as $lang){
            $data[getLocale($lang)] = [
                'text'=> $formData[getLocale($lang).'_text']
            ];
        }
        $career->update($data);
        $this->dispatchBrowserEvent('toaster:info', [
            'message' => 'قسمت تامین کنندگاه ویرایش شد.',
        ]);
    }




    public function render()
    {
        return view('livewire.admin.vendor-content',[
            'history' => Content::where('page', 'vendor')->first(),
            'languages' => Language::all()
        ]);
    }
}
