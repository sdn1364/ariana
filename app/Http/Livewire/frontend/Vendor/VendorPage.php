<?php

namespace App\Http\Livewire\frontend\Vendor;

use App\Models\tenders\Tender;
use Livewire\Component;
use function view;

class VendorPage extends Component
{
    public $tender;

    public function mount(Tender $tender)
    {
        $this->tender = $tender;
    }

    public function render()
    {

        return view('livewire.frontend.vendor.page',[
            'related'=> Tender::with('tenderApplications')->where('status', 1)->where('tags','like', '%'.$this->tender->tags.'%')->take(5)->get()
        ])->extends('layouts.app');
    }
}
