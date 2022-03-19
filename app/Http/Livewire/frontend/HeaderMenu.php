<?php

namespace App\Http\Livewire\frontend;

use App\Models\Language;
use App\Models\pages\Page;
use App\Models\sectors\Sector;
use Livewire\Component;
use function view;

class HeaderMenu extends Component
{


    public function render()
    {
        return view('livewire.frontend.header-menu', [
            'sectors' => Sector::with('translations')->where('status', 1)->where('parent_id', 0)->get(),

            'languages' => Language::all(),

            'pages'=> Page::all(),
        ]);
    }
}
