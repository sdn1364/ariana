<?php

namespace App\Http\Livewire\frontend\Home;

use App\Models\quicklinks\Quicklink;
use Livewire\Component;
use function view;

class Links extends Component
{
    public function render()
    {
        return view('livewire.frontend.home.links', [
            'links' => Quicklink::where('status', 1)->get()
        ]);
    }
}
