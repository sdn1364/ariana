<?php

namespace App\Http\Livewire\frontend;

use App\Models\contents\Content;
use Livewire\Component;
use function view;

class Innovation extends Component
{
    public function render()
    {
        return view('livewire.frontend.innovation',[
            'content'=> Content::where('page', 'innovation')->first(),
            'innovations' => \App\Models\innovations\Innovation::where('status', 1)->get()
        ])->extends('layouts.app');
    }
}
