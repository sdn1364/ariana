<?php

namespace App\Http\Livewire\frontend\Home;

use App\Models\contents\Content;
use Livewire\Component;
use function view;

class History extends Component
{
    public function render()
    {
        return view('livewire.frontend.home.history',[
            'history' => Content::where('page', 'historyMain')->first()
        ]);
    }
}
