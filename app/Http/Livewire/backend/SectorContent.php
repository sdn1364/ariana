<?php

namespace App\Http\Livewire\backend;

use App\Models\contents\Content;
use App\Models\Language;
use Livewire\Component;

class SectorContent extends Component
{
    public function save($formData)
    {

        $career = Content::where('page', 'sector')->first();

        if(!empty($formData['file'])){
            if($career->hasMedia()){
                $career->getMedia()[0]->delete();
            }
            $career->addMedia(storage_path('app/').$formData['file'])->toMediaCollection();
        }

        $data = [];
        foreach(Language::all() as $lang){
            $data[getLocale($lang)] = [
                'title'=> $formData[getLocale($lang).'_title'],
                'text'=> $formData[getLocale($lang).'_text']
            ];
        }
        $career->update($data);
        $this->dispatchBrowserEvent('toaster:info', [
            'message' => 'بخش‌ها ویرایش شد.',
        ]);
    }
    public function render()
    {
        return view('livewire.admin.sector-content',[
            'content' => Content::where('page', 'sector')->first(),
            'languages' => Language::all()
        ]);
    }
}
