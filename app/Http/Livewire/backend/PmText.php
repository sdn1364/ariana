<?php

namespace App\Http\Livewire\backend;

use App\Models\Language;
use App\Models\pageMaker\PmElement;
use Livewire\Component;

class PmText extends Component
{
    public $element;

    public function mount(PmElement $element)
    {
        $this->element = $element;
    }

    public function deleteElement(PmElement $element)
    {
        $this->emitUp('deleteElement',$element->id);
    }

    public function store($formData){

        $element = PmElement::find($this->element->id);
        $data = [];
        foreach(Language::all() as $lang){
            $data[getLocale($lang)] = [
                'content'=> $formData[getLocale($lang).'_content']
            ];
        }

        $element->update($data);
        $this->dispatchBrowserEvent('toaster:info', [
            'message' => 'متن ویرایش شد.',
        ]);
    }

    public function render()
    {
        return view('livewire.admin.pm-text',[
            'languages' => Language::all()
        ]);
    }
}
