<?php

namespace App\Http\Livewire\backend;

use App\Models\innovations\Innovation;
use Livewire\Component;
use Livewire\WithPagination;

class InnovationApplication extends Component
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


    public $status;
    public $level;
    public $reason;


    public function render()
    {
        return view('livewire.admin.innovation-application',[
            'applications' => \App\Models\innovations\InnovationApplication::paginate($this->paginationNumber),
            'innovations' => Innovation::all()
        ]);
    }

    public function save($id)
    {

        $this->validate([
            'status'=> 'string',
            'level' => 'integer',
            'reason'=> 'nullable | string'
        ]);

        $application = \App\Models\innovations\InnovationApplication::find($id);

        $application->update([
            'status'=> $this->status,
            'level'=> $this->level,
            'reason' => $this->reason
        ]);

        $this->dispatchBrowserEvent('toaster:info', [
            'message' => 'درخواست مورد نظر ویرایش شد.',
        ]);
    }

    public function showRequest($id){
        $this->innovationApplication = \App\Models\innovations\InnovationApplication::find($id);
    }
}
