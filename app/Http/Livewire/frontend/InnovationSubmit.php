<?php

namespace App\Http\Livewire\frontend;

use App\Models\innovations\InnovationApplication;
use Livewire\Component;
use function redirect;
use function route;
use function trans;
use function view;

class InnovationSubmit extends Component
{
    public $title;
    public $fullname;
    public $organizational_title;
    public $company_name;
    public $email;
    public $phone_number;
    public $field;
    public $usage;
    public $explanation;
    public $sample;
    public $description;
    public $conditions;
    public $benefits;
    public $obstacles;




    public function save()
    {
        $validated = $this->validate([
            'title' => 'required | string',
            'fullname' => 'required | string',
            'organizational_title'=> 'required | string',
            'company_name' => 'required | string',
            'email' => 'required | string | email',
            'phone_number' => 'required | string',
            'field' => 'required | string',
            'usage' => 'required | string',
            'explanation' => 'required | string',
            'sample' => 'required | string',
            'description' => 'required | string',
            'conditions' => 'required | string',
            'benefits' => 'required | string',
            'obstacles' => 'required | string',
        ]);

        InnovationApplication::create(array_merge($validated, [
            'user_id'=>auth()->user()->id,

        ]));

        $this->emitTo('notification', 'notify', ['type' => 'success', 'content' => trans('application_submitted')]);

        return redirect()->to(route('profile'));

    }



    public function render()
    {
        return view('livewire.frontend.innovation-submit')->extends('layouts.app');
    }
}
