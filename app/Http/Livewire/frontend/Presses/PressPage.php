<?php

namespace App\Http\Livewire\frontend\Presses;

use App\Models\presses\Press;
use Livewire\Component;
use function view;

class PressPage extends Component
{
    public $press;

    public function mount(Press $press)
    {
        $this->press = $press;
    }


    public function render()
    {
        return view('livewire.frontend.presses.page',[
            'related'=> Press::where('status', 1)->where('tags','like', '%'.$this->press->tags.'%')->take(5)->get()
        ])->extends('layouts.app');
    }
}
