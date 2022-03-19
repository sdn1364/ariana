<?php

namespace App\Http\Livewire\frontend\Projects;

use App\Models\projects\Project;
use Livewire\Component;
use function view;

class ProjectPage extends Component
{

    public $project;

    public function mount(Project $project){
        $this->project = $project;
    }

    public function render()
    {
        return view('livewire.frontend.projects.page', [
            'related' => Project::where('status', 1)->where('sector_id', $this->project->sector->id)->take(5)
        ])->extends('layouts.app');
    }
}
