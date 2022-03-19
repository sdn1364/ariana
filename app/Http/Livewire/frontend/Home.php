<?php

namespace App\Http\Livewire\frontend;

use Livewire\Component;
use function view;

class Home extends Component
{
    public function render()
    {
        return view('livewire.frontend.home')->extends('layouts.app');
    }
}
