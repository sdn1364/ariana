<?php

namespace App\Http\Livewire\backend;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithPagination;

class Datatable extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    private $users;
    public $paginationNumber = 10;
    public $status = '';
    public $type = '';
    public $search = '';
    public $sort = 'id';
    public $direction = 'asc';
    public $loading = true;

    public $model = '';
    public $headers = [];
    public $searchable = [];

    public $headerHasLink = false;

    public $route = '';


    public function render()
    {
        return view('livewire.admin.datatable', [
            'records' => $this->model::withTranslation()->orderBy($this->sort, $this->direction)
                ->paginate($this->paginationNumber),
        ]);
    }


    public function updatedType($value)
    {
        $this->type = $value;
    }

    public function updatedSearch($value)
    {
        $this->search = $value;
    }

    public function toggleStatus($id)
    {
        $model = $this->model::find($id);

        if ($model->status) {
            $model->status = false;
        } else {
            $model->status = true;
        }

        $model->update();


        $this->dispatchBrowserEvent('toaster:info', [
            'message' => 'وضعیت آیتم مورد نظر تغییر کرد.',
        ]);

    }

    public function sort($value)
    {
        if($this->sort == $value){
            $this->direction = $this->direction === 'asc' ? 'desc' : 'asc';
        }else{
            $this->direction = 'asc';
        }

        $this->sort = $value;
    }
    public function delete($id){
        $model = $this->model::find($id);
        $model->delete();
        $this->dispatchBrowserEvent('toaster:info', [
            'message' => 'آیتم مورد نظر حذف شد.',
        ]);
    }

    public function exportExcel(){
        return (new FastExcel(User::all()))->download('file.xlsx');
    }
}
