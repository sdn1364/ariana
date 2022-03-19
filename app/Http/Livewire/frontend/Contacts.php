<?php

namespace App\Http\Livewire\frontend;

use App\Models\contacts\Contact;
use Livewire\Component;
use function view;

class Contacts extends Component
{
    public function render()
    {
        return view('livewire.frontend.contacts',[
            'contacts'=> Contact::where('status', 1)->get()
        ])->extends('layouts.app');
    }
}
