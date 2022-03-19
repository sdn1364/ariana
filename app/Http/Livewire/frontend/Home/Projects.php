<?php

namespace App\Http\Livewire\frontend\Home;

use App\Models\contents\Content;
use App\Models\projects\Project;
use Livewire\Component;
use function view;

class Projects extends Component
{
    public function render()
    {
        return view('livewire.frontend.home.projects',[
            'projects' => Project::withTranslation()->where('status', 1)->get(),
            'allProjectsCount' => Project::Where('status', 1)->count(),
            'inProgressCount' => Project::Where('progress', 'in_progress')->count(),
            'content'=> Content::withTranslation()->where('page', 'personnel')->first()
        ]);
    }
}
