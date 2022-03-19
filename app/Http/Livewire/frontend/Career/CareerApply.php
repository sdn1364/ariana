<?php

namespace App\Http\Livewire\frontend\Career;

use App\Models\careers\Career;
use App\Models\careers\CareerApplication;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class CareerApply extends Component
{

    use WithFileUploads;

    public $career;


    public $fullname;
    public $email;
    public $phone;
    public $resume;
    public $fileName = '';

    public function mount(Career $career)
    {
        $this->career = $career;
    }

    public function updatedResume()
    {
        $validated = $this->validate([
            'resume' => 'required | file | mimes:pdf,doc,docx,xls,xlsx,jpg | max:5120'
        ]);
        $this->fileName = $this->resume->getClientOriginalName();
    }

    public function save()
    {
        $validate = $this->validate([
            'fullname' => 'required | string',
            'email' => 'required | email',
            'phone' => 'required | string',
        ]);

        $resume = $this->resume->storeAs('uploads',Str::random().'.'.$this->resume->getClientOriginalExtension());

        CareerApplication::create([
            'fullname'=> $validate['fullname'],
            'email'=> $validate['email'],
            'phone'=> $validate['phone'],
            'resume'=> $resume,
            'career_id'=> $this->career->id
        ]);

        $this->emitTo('notification', 'notify', ['type' => 'info', 'content' => trans('application_submitted')]);
        return redirect()->to(route('career'));

    }

    public function render()
    {
        return view('livewire.frontend.career.apply')->extends('layouts.app');
    }
}
