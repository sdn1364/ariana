<?php

namespace App\Http\Livewire\backend\pagemaker\elements;

use App\Models\Language;
use App\Models\pageMaker\PmElement;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use function view;

class PmPhoto extends Component
{
    use WithFileUploads;

    public $element;
    public $file;

    public function mount(PmElement $element)
    {
        $this->element = $element;
    }
    public function deleteElement(PmElement $element)
    {
        $this->emitUp('deleteElement',$element->id);
    }

    public function store(){

        $this->validate([
            'file' => 'image|max:5024',
        ]);

        $element = PmElement::find($this->element->id);

        $file = $this->file->storeAs('uploads',Str::random().'.'.$this->file->getClientOriginalExtension());

        $element->update([
            'file'=> $file
        ]);

        $this->dispatchBrowserEvent('toaster:info', [
            'message' => 'عکس آپلود شد.',
        ]);
    }
    public function render()
    {
        return view('livewire.admin.pm-photo',[
            'language' => Language::all()
        ]);
    }
}
