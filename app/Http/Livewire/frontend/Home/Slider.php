<?php

namespace App\Http\Livewire\frontend\Home;

use App\Models\slides\Slide;
use Livewire\Component;
use function view;

class Slider extends Component
{
    public function render()
    {
        return view('livewire.frontend.home.slider',[
            'slides'=> Slide::where('status', 1)->get()
        ]);
    }
}
