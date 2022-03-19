<?php

namespace App\Http\Livewire\frontend;

use App\Models\innovations\InnovationApplication;
use App\Models\tenders\Tender;
use Livewire\Component;
use function view;

class Profile extends Component
{

    public function render()
    {

        return view('livewire.frontend.profile',[
            'user'=> auth()->user(),
            'related' => Tender::where('status', 1)->where('deadline', '>', now()->day)->take(5)->get(),
            'tenders' => Tender::where('status', 1)->get(),
            'innovations' => InnovationApplication::where('user_id', auth()->user()->id)->get()
        ])->extends('layouts.app');
    }
}
