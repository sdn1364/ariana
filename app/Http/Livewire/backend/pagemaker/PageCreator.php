<?php

namespace App\Http\Livewire\backend\pagemaker;

use App\Models\pageMaker\PmRow;
use Livewire\Component;
use function view;

class PageCreator extends Component
{
    public $page_id = 0;

    protected $listeners = ['deleteRow','changeSize'=> '$refresh'];


    public function addRow($page_id)
    {
        PmRow::create([
            'size' => '1',
            'page_id' => $page_id,
            'parent_id' => 0,
            'part' => 1
        ]);
    }

    public function deleteRow(PmRow $row)
    {
        $row->delete();
    }

    public function render()
    {
        return view('livewire.admin.page-creator',[
            'rows' => PmRow::where('page_id', $this->page_id)->where('parent_id', 0)->orderBy('created_at')->get(),
        ]);
    }
}
