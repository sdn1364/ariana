<?php

namespace App\Http\Livewire\frontend\Vendor;

use App\Models\tenders\Tender;
use App\Models\tenders\TenderApplication;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use function auth;
use function redirect;
use function view;

class StepOne extends Component
{
    use WithFileUploads;

    public $tender;
    public $bank;
    public $bankName;

    public function mount(Tender $tender)
    {
        $this->tender = $tender;
    }

    public function updatedBank()
    {
        $this->validate([
            'bank' => 'required | file | mimes:pdf,doc,docx,xls,xlsx,jpg | max:10240'
        ]);

        $this->bankName = $this->bank->getClientOriginalName();

    }

    public function save()
    {
        $bank = $this->bank->storeAs('uploads',Str::random().'.'.$this->bank->getClientOriginalExtension());
        $application = TenderApplication::create([
            'bank'=> $bank,
            'type'=>$this->tender->type,
            'status'=> 'pending',
            'user_id'=> auth()->user()->id,
            'tender_id' => $this->tender->id
        ]);

        return redirect(route('tender-step-two', $application->id));
    }
    public function render()
    {
        return view('livewire.frontend.vendor.step-one')->extends('layouts.app');
    }
}
