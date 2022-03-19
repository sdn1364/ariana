<?php

namespace App\Http\Livewire\frontend;

use App\Models\innovations\Innovation;
use App\Models\innovations\InnovationApplication;
use Livewire\Component;
use function view;

class InnovationProgress extends Component
{
    public $application;
    public function mount(InnovationApplication $innovationApplication)
    {
        $this->application = $innovationApplication;
    }


    public function render()
    {
        return view('livewire.frontend.innovation-progress', [
            'innovations' => Innovation::all()
        ])->extends('layouts.app');
    }
}
