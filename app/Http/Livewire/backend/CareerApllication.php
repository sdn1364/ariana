<?php

namespace App\Http\Livewire\backend;

use Livewire\Component;
use Livewire\WithPagination;

class CareerApllication extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    private $users;
    public $paginationNumber = 10;
    public $type = '';
    public $search = '';
    public $sort = 'id';
    public $direction = 'asc';
    public $loading = true;

    public $headerHasLink = false;

    public $route = '';

    public $innovationApplication;


    public function render()
    {
        return view('livewire.admin.career-apllication',[
            'applications' => \App\Models\careers\CareerApplication::paginate($this->paginationNumber),
        ]);
    }
}
