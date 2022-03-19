<?php

namespace App\Http\Livewire\backend;

use App\Models\contents\Content;
use App\Models\Language;
use Livewire\Component;

class CareerContent extends Component
{

    public function save($formData)
    {

        $career = Content::where('page', 'career')->first();

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
            'message' => 'فرصت‌های شغلی ویرایش شد.',
        ]);
    }

    public function render()
    {
        return view('livewire.admin.career-content',[
            'content' => Content::where('page', 'career')->first(),
            'languages' => Language::all()
        ]);
    }
}
