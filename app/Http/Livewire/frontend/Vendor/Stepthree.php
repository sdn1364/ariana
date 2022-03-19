<?php

namespace App\Http\Livewire\frontend\Vendor;

use App\Models\tenders\TenderApplication;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use function redirect;
use function view;

class Stepthree extends Component
{
    use WithFileUploads;
    public $tenderApplication;
    public $offer;
    public $offerName;

    public function mount(TenderApplication $tenderApplication)
    {
        $this->tenderApplication = $tenderApplication;
    }

    public function updatedOffer()
    {
        $validated = $this->validate([
            'offer' => 'required | file | mimes:pdf,doc,docx,xls,xlsx,jpg | max:60000'
        ]);
        $this->offerName = $this->offer->getClientOriginalName();
    }

    public function save(){
        $this->validate([
            'offer' => 'required'
        ]);

        $offer = $this->offer->storeAs('uploads',Str::random().'.'.$this->offer->getClientOriginalExtension());

        $tenderApplication = TenderApplication::find($this->tenderApplication->id);
        $tenderApplication->update([
            'offer'=> $offer
        ]);
        return redirect(route('profile'));
    }

    public function render()
    {
        return view('livewire.frontend.vendor.stepthree')->extends('layouts.app');
    }
}
