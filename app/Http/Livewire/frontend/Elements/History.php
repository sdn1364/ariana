<?php

namespace App\Http\Livewire\Frontend\Elements;

use Livewire\Component;

class History extends Component
{

    public function render()
    {
        return view('livewire.frontend.elements.history',[
            'history' => \App\Models\Histories\History::where('status', 1)->get(),
            'years' => \App\Models\Histories\History::where('status', 1)->distinct('year')->get('year'),
        ]);
    }
}
