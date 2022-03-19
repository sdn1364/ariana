<?php

namespace App\Http\Livewire\frontend;

use App\Models\projects\Project;
use App\Models\sectors\Sector;
use App\Models\services\Service;
use Carbon\Carbon;
use Livewire\Component;
use function view;

class Projects extends Component
{
    public $location = 'all';
    public $service = 0;
    public $sector = 0;


    public function render()
    {
        return view('livewire.frontend.projects', [

            'sectors' => Sector::where('parent_id', '!=', '0')->get(),
            'services' => Service::all(),

            'projects' => Project::with(['translations', 'sector'])->where('status', true)->when($this->sector != 0, function ($query) {

                return $query->where('sector_id', $this->sector);

            })->when($this->service != 0, function ($query) {

                return $query->where('service_id', $this->service);

            })->when($this->location != 'all', function ($query) {

                return $query->whereTranslation('location', $this->location);

            })->paginate(6),

            'projectsTimeline' => Project::withTranslation()->where('status', true)->when($this->sector, function ($query, $sector) {

                return $query->where('sector_id', $sector);

            })->when($this->service, function ($query, $service) {

                return $query->where('service_id', $service);

            })->orderBy('start_date', 'asc')->get()->groupBy(function ($val) {

                return Carbon::parse($val->start_date)->format('Y');

            }),

            'locations' => Project::listsTranslations('location')->pluck('location')->unique()

        ])->extends('layouts.app');
    }

    public function setLocation($filter)
    {
        $this->location = $filter;
    }

    public function setService($value)
    {
        $this->service = $value;
    }

    public function setSector($value)
    {
        $this->sector = $value;
    }

}
