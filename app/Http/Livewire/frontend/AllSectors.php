<?php

namespace App\Http\Livewire\frontend;

use App\Models\contents\Content;
use App\Models\sectors\Sector;
use Livewire\Component;
use function view;

class AllSectors extends Component
{
    public function render()
    {
        return view('livewire.frontend.all-sectors',[
            'content'=> Content::where('page', 'sector')->first(),
            'sectors' => Sector::where('parent_id', 0)->get()
        ])->extends('layouts.app');
    }
}
