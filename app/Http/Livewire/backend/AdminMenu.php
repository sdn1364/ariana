<?php

namespace App\Http\Livewire\backend;

use Livewire\Component;
use function config;
use function view;

class AdminMenu extends Component
{
    public $menus;

    public function mount(){
        $this->menus = config('admin-menu');
    }

    public function render()
    {
        return view('livewire.admin.admin-menu');
    }
}
