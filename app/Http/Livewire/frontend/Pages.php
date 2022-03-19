<?php

namespace App\Http\Livewire\frontend;

use App\Models\Histories\History;
use App\Models\pages\Page;
use Livewire\Component;

class Pages extends Component
{

    public $content;

    public function mount(Page $page)
    {
        $this->content = $page;
    }

    public function render()
    {

        return view('livewire.frontend.pages',[
            'allPages'=> Page::where('parent_id', 0)->get(),
            'history' => History::where('status', 1)->get(),
            'years' => History::where('status', 1)->distinct('year')->get('year'),
        ])->extends('layouts.app');
    }
}
