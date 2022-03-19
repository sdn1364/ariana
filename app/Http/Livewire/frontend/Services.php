<?php

namespace App\Http\Livewire\frontend;

use App\Models\services\Service;
use Livewire\Component;
use function view;

class Services extends Component
{
    public function render()
    {
        return view('livewire.frontend.services', [
            'services' => Service::where('status', 1)->get()
        ])->extends('layouts.app');
    }
}
