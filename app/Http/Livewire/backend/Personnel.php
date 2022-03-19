<?php

namespace App\Http\Livewire\backend;

use App\Models\contents\Content;
use App\Models\Language;
use Livewire\Component;

class Personnel extends Component
{

    public function save($formData)
    {

        $career = Content::where('page', 'personnel')->first();


        $data = [];
        foreach(Language::all() as $lang){
            $data[getLocale($lang)] = [
                'title'=> $formData['title'],
            ];
        }
        $career->update($data);
        $this->dispatchBrowserEvent('toaster:info', [
            'message' => 'تعداد پرسنل ویرایش شد.',
        ]);
    }


    public function render()
    {
        return view('livewire.admin.personnel',[
            'content'=> Content::withTranslation()->where('page', 'personnel')->first()
        ]);
    }
}
