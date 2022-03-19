<?php

namespace App\Http\Livewire\backend\pagemaker;

use App\Models\pageMaker\PmRow;
use Livewire\Component;
use function view;

class Module extends Component
{

    public $row;
    public $size_option = false;

    public $part;


    public function mount(PmRow $row)
    {
        $this->row = $row;
    }

    public function showSizes()
    {
        $this->size_option = !$this->size_option;
    }

    public function changeSize($size)
    {
        $this->row->update([
            'size' => $size
        ]);
        $this->emitUp('changeSize');
    }

    public function deleteRow()
    {
        $this->emitUp('deleteRow', $this->row->id);
    }

    public function render()
    {
        $sizes_buttons = [
            0 => ['name' => '1',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20" fill="none">
                                <path d="M0,19V1A.94.94,0,0,1,1,0H19a.94.94,0,0,1,1,1V19a.94.94,0,0,1-1,1H1A.94.94,0,0,1,0,19Z" fill="black"/>
                              </svg>'
            ],
            1 => ['name' => '2_2', 'icon' => '<svg  xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20" fill="none">
                       <path opacity="0.3" d="M0,19V1A.94.94,0,0,1,1,0H8A.94.94,0,0,1,9,1V19a.94.94,0,0,1-1,1H1A.94.94,0,0,1,0,19Z" fill="black"/>
                       <path d="M11,19V1a.94.94,0,0,1,1-1h7a.94.94,0,0,1,1,1V19a.94.94,0,0,1-1,1H12A.94.94,0,0,1,11,19Z" fill="black"/>
                       </svg>'],
            2 => ['name' => '3', 'icon' => '
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20" fill="none">
                <path opacity="0.3" d="M0,19V1A.94.94,0,0,1,1,0H4.34a.94.94,0,0,1,1,1V19a.94.94,0,0,1-1,1H1A.94.94,0,0,1,0,19Z" fill="black"/>
                <path opacity="0.3" d="M14.66,19V1a.94.94,0,0,1,1-1H19a.94.94,0,0,1,1,1V19a.94.94,0,0,1-1,1H15.66A.94.94,0,0,1,14.66,19Z" fill="black"/>
                <path  d="M7.33,19V1a.94.94,0,0,1,1-1h3.34a.94.94,0,0,1,1,1V19a.94.94,0,0,1-1,1H8.33A.94.94,0,0,1,7.33,19Z" fill="black"/>
            </svg>
            '],
            3 => ['name' => '1_2', 'icon' => '
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20" fill="none">
            <path d="M0,19V1A.94.94,0,0,1,1,0H4.34a.94.94,0,0,1,1,1V19a.94.94,0,0,1-1,1H1A.94.94,0,0,1,0,19Z" fill="black"/>
            <path opacity="0.3" d="M7.33,19V1a.94.94,0,0,1,1-1H19a.94.94,0,0,1,1,1V19a.94.94,0,0,1-1,1H8.33A.94.94,0,0,1,7.33,19Z" fill="black"/>
            </svg>
            '],
            4 => ['name' => '2_1', 'icon' => '
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20" fill="none">
                <path d="M0,19V1A.94.94,0,0,1,1,0H11.67a.94.94,0,0,1,1,1V19a.94.94,0,0,1-1,1H1A.94.94,0,0,1,0,19Z" fill="black"/>
                <path opacity="0.3" d="M14.66,19V1a.94.94,0,0,1,1-1H19a.94.94,0,0,1,1,1V19a.94.94,0,0,1-1,1H15.66A.94.94,0,0,1,14.66,19Z" fill="black"/>
                </svg>
            '],
            5 => ['name' => '4', 'icon' => '
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20" fill="none">
                <path d="M16.49,19V1a.94.94,0,0,1,1-1H19a.94.94,0,0,1,1,1V19a.94.94,0,0,1-1,1h-1.5A.94.94,0,0,1,16.49,19Z" fill="black"/>
                <path opacity="0.3" d="M11,19V1a.94.94,0,0,1,1-1h1.5a.94.94,0,0,1,1,1V19a.94.94,0,0,1-1,1H12A.94.94,0,0,1,11,19Z" fill="black"/>
                <path d="M5.5,19V1a.94.94,0,0,1,1-1H8A.94.94,0,0,1,9,1V19a.94.94,0,0,1-1,1H6.5A.94.94,0,0,1,5.5,19Z" fill="black"/>
                <path opacity="0.3" d="M0,19V1A.94.94,0,0,1,1,0H2.5a.94.94,0,0,1,1,1V19a.94.94,0,0,1-1,1H1A.94.94,0,0,1,0,19Z" fill="black"/>
            </svg>
            '],
            6 => ['name' => '1_3', 'icon' => '
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20" fill="none">
                <path d="M3.5,19V1a.94.94,0,0,0-1-1H1A.94.94,0,0,0,0,1V19a.94.94,0,0,0,1,1H2.5A.94.94,0,0,0,3.5,19Z" fill="black"/>
                <path opacity="0.3" d="M20,19V1a.94.94,0,0,0-1-1H6.49a.94.94,0,0,0-1,1V19a.94.94,0,0,0,1,1H19A.94.94,0,0,0,20,19Z" fill="black"/>
            </svg>
            '],
            7 => ['name' => '3_1', 'icon' => '
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20" fill="none">
            <path d="M16.49,19V1a.94.94,0,0,1,1-1H19a.94.94,0,0,1,1,1V19a.94.94,0,0,1-1,1h-1.5A.94.94,0,0,1,16.49,19Z" fill="black"/>
            <path opacity="0.3" d="M0,19V1A.94.94,0,0,1,1,0H13.5a.94.94,0,0,1,1,1V19a.94.94,0,0,1-1,1H1A.94.94,0,0,1,0,19Z" fill="black"/>
            </svg>
            '],
            8 => ['name' => '1_2_1', 'icon' => '
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20" fill="none">
            <path d="M16.49,19V1a.94.94,0,0,1,1-1H19a.94.94,0,0,1,1,1V19a.94.94,0,0,1-1,1h-1.5A.94.94,0,0,1,16.49,19Z" fill="black"/>
            <path  d="M0,19V1A.94.94,0,0,1,1,0H2.5a.94.94,0,0,1,1,1V19a.94.94,0,0,1-1,1H1A.94.94,0,0,1,0,19Z" fill="black"/>
            <path opacity="0.3" d="M5.5,19V1a.94.94,0,0,1,1-1h7a.94.94,0,0,1,1,1V19a.94.94,0,0,1-1,1h-7A.94.94,0,0,1,5.5,19Z" fill="black"/>
            </svg>
            '],
            9 => ['name' => '1_1_2', 'icon' => '
            <svg  xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20" fill="none">
            <path opacity="0.3" d="M11,19V1a.94.94,0,0,1,1-1h7a.94.94,0,0,1,1,1V19a.94.94,0,0,1-1,1H12A.94.94,0,0,1,11,19Z" fill="black"/>
            <path  d="M5.5,19V1a.94.94,0,0,1,1-1H8A.94.94,0,0,1,9,1V19a.94.94,0,0,1-1,1H6.5A.94.94,0,0,1,5.5,19Z" fill="black"/>
            <path d="M0,19V1A.94.94,0,0,1,1,0H2.5a.94.94,0,0,1,1,1V19a.94.94,0,0,1-1,1H1A.94.94,0,0,1,0,19Z" fill="black"/>
            </svg>
            '],
            10 => ['name' => '2_1_1', 'icon' => '
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20" fill="none">
                <path opacity="0.3" d="M9,19V1A.94.94,0,0,0,8,0H1A.94.94,0,0,0,0,1V19a.94.94,0,0,0,1,1H8A.94.94,0,0,0,9,19Z" fill="black"/>
                <path  d="M14.5,19V1a.94.94,0,0,0-1-1H12a.94.94,0,0,0-1,1V19a.94.94,0,0,0,1,1h1.5A.94.94,0,0,0,14.5,19Z" fill="black"/>
                <path d="M20,19V1a.94.94,0,0,0-1-1H17.5a.94.94,0,0,0-1,1V19a.94.94,0,0,0,1,1H19A.94.94,0,0,0,20,19Z" fill="black"/>
            </svg>
            '],
        ];

        return view('livewire.admin.module', [
            'sizes_buttons' => $sizes_buttons
        ]);
    }


}
