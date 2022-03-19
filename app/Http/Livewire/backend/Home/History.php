<?php

namespace App\Http\Livewire\backend\Home;

use App\Models\contents\Content;
use App\Models\Language;
use Livewire\Component;

class History extends Component
{

    public function save($formData)
    {

        $history = Content::where('page', 'historyMain')->first();

        if(!empty($formData['file'])){
            if($history->hasMedia()){
                $history->getMedia()[0]->delete();
            }
            $history->addMedia(storage_path('app/').$formData['file'])->toMediaCollection();
        }

        $data = [];
        foreach(Language::all() as $lang){
            $data[getLocale($lang)] = [
                'text'=> $formData[getLocale($lang).'_text']
            ];
        }
        $history->update($data);
        $this->dispatchBrowserEvent('toaster:info', [
            'message' => 'تاریخچه ویرایش شد.',
        ]);
    }

    public function render()
    {
        return view('livewire.admin.home.history',[
            'history' => Content::where('page', 'historyMain')->first(),
            'languages' => Language::all()
        ]);
    }
}
