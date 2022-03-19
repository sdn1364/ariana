<?php

namespace App\Http\Livewire\frontend\Career;

use App\Models\careers\Career;
use Livewire\Component;

class CareerPage extends Component
{
    public $career;

    public function mount(Career $career)
    {
        $this->career = $career;
    }


    public function render()
    {
        return view('livewire.frontend.career.page')->extends('layouts.app');
    }
}
