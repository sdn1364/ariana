<?php

namespace App\Http\Livewire\backend;

use Livewire\Component;

class MainPage extends Component
{
    public function render()
    {
        return view('livewire.admin.main-page')->extends('layouts.admin');
    }
}
