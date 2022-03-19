<?php

namespace App\Http\Livewire\backend;

use App\Models\pageMaker\PmElement;
use Livewire\Component;

class PmHistory extends Component
{

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



    public function render()
    {
        return view('livewire.admin.pm-history');
    }
}
