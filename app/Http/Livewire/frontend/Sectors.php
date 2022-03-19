<?php

namespace App\Http\Livewire\frontend;

use App\Models\projects\Project;
use App\Models\sectors\Sector;
use Livewire\Component;
use function view;

class Sectors extends Component
{
    public $sector;

    public function mount(Sector $sector){
        $this->sector = $sector;
    }

    public function render()
    {
        return view('livewire.frontend.sectors',[
            'sector'=> Sector::find($this->sector->id),
            'sectors' => Sector::where('status', 1)->where('parent_id',0)->get(),
            'projects' => Project::where('sector_id', $this->sector->id)->inRandomOrder()->take(5)
        ])->extends('layouts.app');
    }
}
