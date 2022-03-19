<?php

namespace App\Http\Livewire\frontend;

use App\Models\contents\Content;
use Livewire\Component;
use function view;

class Career extends Component
{
    public function render()
    {
        return view('livewire.frontend.career',[
            'content' => Content::where('page', 'career')->first(),
            'careers' => \App\Models\careers\Career::where('status', 1)->paginate(8)
        ])->extends('layouts.app');
    }
}
