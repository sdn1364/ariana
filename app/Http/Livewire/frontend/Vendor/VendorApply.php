<?php

namespace App\Http\Livewire\frontend\Vendor;

use App\Models\tenders\Tender;
use App\Models\tenders\TenderApplication;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use function auth;
use function view;

class VendorApply extends Component
{
    use WithFileUploads;

    public $tender;
    public $bank;

    public function mount(Tender $tender)
    {
        $this->tender = $tender;
    }

    public function updatedBank()
    {
        $this->validate([
            'bank' => 'required | file | mimes:pdf,doc,docx,xls,xlsx,jpg | max:15000'
        ]);
    }

    public function save()
    {
        $bank = $this->bank->storeAs(Str::random().$this->bank->getClientOriginalExtension(),'uploads');
        $application = TenderApplication::create([
            'application_uid'=> Str::random(),
            'bank'=> $bank,
            'type'=>$this->tender->type,
            'status'=> 'pending',
            'user_id'=> auth()->user->id,
            'tender_id' => $this->tender->id
        ]);
    }

    public function render()
    {
        return view('livewire.frontend.vendor.vendor-apply')->extends('layouts.app');
    }
}
