<?php

namespace App\Http\Livewire\frontend;

use App\Models\presses\Press;
use Livewire\Component;
use Livewire\WithPagination;
use function view;

class Presses extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.frontend.press',[
            'presses' => Press::where('status', 1)->paginate(6)
        ])->extends('layouts.app');
    }
}
