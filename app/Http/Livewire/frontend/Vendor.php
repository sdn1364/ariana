<?php

namespace App\Http\Livewire\frontend;

use App\Models\tenders\Tender;
use Livewire\Component;
use function view;

class Vendor extends Component
{
    public $type = 'all';
    public $status = 'all';
    public $today;
    public $dte;
    public $view = 'list';




    public function  mount()
    {
        $this->today = now();
    }

    public function render()
    {
        return view('livewire.frontend.vendor', [
            'tenders' => Tender::withTranslation()->where('status', 1)
                ->when($this->status != 'all', function ($query) {
                    return $query->where('progress', $this->status);
                })
                ->when($this->type != 'all', function ($query) {
                    return $query->where('type', $this->type);
                })
                ->when($this->today, function($query){

                })
                ->paginate(6, ['id', 'deadline', 'type', 'progress', 'code'])

        ])->extends('layouts.app');
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function setToday($date){

    }
}
