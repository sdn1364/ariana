<?php

namespace App\Http\Livewire\backend\pagemaker;

use App\Models\pageMaker\PmElement;
use App\Models\pageMaker\PmRow;
use Livewire\Component;
use function view;

class ModuleContent extends Component
{

    public $row;
    public $part;

    public $listeners =['deleteElement'];

    public function mount(PmRow $row)
    {
        $this->row = $row;
    }

    public function addElement($type)
    {
        $data =[
            'type'=> $type,
            'part'=> $this->part,
            'pm_row_id'=> $this->row->id
        ];

        PmElement::create($data);
    }

    public function deleteElement(PmElement $element)
    {
        $element->delete();
    }

    public function render()
    {
        return view('livewire.admin.module-content',[
            'elements' => PmElement::where('pm_row_id', $this->row->id)->get()
        ]);
    }
}
