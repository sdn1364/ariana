<?php

namespace App\Http\Livewire\frontend\Vendor;

use App\Models\tenders\TenderApplication;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use function redirect;
use function view;

class StepTwo extends Component
{
    use WithFileUploads;

    public $tenderApplication;
    public $registration;
    public $registrationName;
    public $executiveRecord;
    public $executiveRecordName;
    public $ads;
    public $adsName;
    public $machinery;
    public $machineryName;
    public $companyInfo;
    public $companyInfoName;
    public $certificate;
    public $certificateName;
    public $product;
    public $productName;
    public $capacity;
    public $capacityName;

    public function mount(TenderApplication $tenderApplication)
    {
        $this->tenderApplication = $tenderApplication;
    }

    public function updatedRegistration()
    {
        $this->validate([
            'registration' => 'file | mimes:pdf,doc,docx,xls,xlsx,jpg | max:15360'
        ]);
        $this->registrationName = $this->registration->getClientOriginalName();

    }
    public function updatedExecutiveRecord()
    {
        $this->validate([
            'executiveRecord' => 'file | mimes:pdf,doc,docx,xls,xlsx,jpg | max:15360'
        ]);
        $this->executiveRecordName = $this->executiveRecord->getClientOriginalName();

    }
    public function updatedAds()
    {
        $this->validate([
            'ads' => 'file | mimes:pdf,doc,docx,xls,xlsx,jpg | max:15360'
        ]);
        $this->adsName = $this->ads->getClientOriginalName();

    }
    public function updatedMachinery()
    {
        $this->validate([
            'machinery' => 'file | mimes:pdf,doc,docx,xls,xlsx,jpg | max:15360'
        ]);
        $this->machineryName = $this->machinery->getClientOriginalName();

    }
    public function updatedCompanyInfo()
    {
        $this->validate([
            'companyInfo' => 'file | mimes:pdf,doc,docx,xls,xlsx,jpg | max:15360'
        ]);
        $this->companyInfoName = $this->companyInfo->getClientOriginalName();

    }
    public function updatedCertificate()
    {
        $this->validate([
            'companyInfo' => 'file | mimes:pdf,doc,docx,xls,xlsx,jpg | max:15360'
        ]);
        $this->certificateName = $this->certificate->getClientOriginalName();

    }
    public function updatedProduct()
    {
        $this->validate([
            'product' => 'file | mimes:pdf,doc,docx,xls,xlsx,jpg | max:15360'
        ]);
        $this->productName = $this->product->getClientOriginalName();
    }
    public function updatedCapacity()
    {
        $this->validate([
            'product' => 'file | mimes:pdf,doc,docx,xls,xlsx,jpg | max:15360'
        ]);
        $this->capacityName = $this->capacity->getClientOriginalName();
    }

    public function saveConst(){
        $this->validate([
            'registration'=> 'required',
            'executiveRecord'=>'required',
            'ads' => 'required',
            'machinery' => 'required',
            'companyInfo' => 'required',
            'certificate' => 'required'
        ]);

        $registration = $this->registration->storeAs('uploads',Str::random().'.'.$this->registration->getClientOriginalExtension());
        $executiveRecord = $this->executiveRecord->storeAs('uploads',Str::random().'.'.$this->executiveRecord->getClientOriginalExtension());
        $ads = $this->ads->storeAs('uploads',Str::random().'.'.$this->ads->getClientOriginalExtension());
        $machinery = $this->machinery->storeAs('uploads',Str::random().'.'.$this->machinery->getClientOriginalExtension());
        $companyInfo = $this->companyInfo->storeAs('uploads',Str::random().'.'.$this->companyInfo->getClientOriginalExtension());
        $certificate = $this->certificate->storeAs('uploads',Str::random().'.'.$this->certificate->getClientOriginalExtension());

        $tenderApplication = TenderApplication::find($this->tenderApplication->id);

        $tenderApplication->update([
            'registration'=> $registration,
            'executive_record'=> $executiveRecord,
            'ads'=> $ads,
            'machinery'=>$machinery,
            'company_info'=>$companyInfo,
            'certificate' => $certificate

        ]);
        return redirect(route('tender-step-three', $this->tenderApplication->id));

    }

    public function saveMan()
    {
        $this->validate();
        $registration = $this->registration->storeAs('uploads',Str::random().'.'.$this->registration->getClientOriginalExtension());
        $productIntro = $this->product->storeAs('uploads',Str::random().'.'.$this->product->getClientOriginalExtension());
        $ads = $this->ads->storeAs('uploads',Str::random().'.'.$this->ads->getClientOriginalExtension());
        $capacity = $this->capacity->storeAs('uploads',Str::random().'.'.$this->capacity->getClientOriginalExtension());
        $companyInfo = $this->companyInfo->storeAs('uploads',Str::random().'.'.$this->companyInfo->getClientOriginalExtension());
        $certificate = $this->certificate->storeAs('uploads',Str::random().'.'.$this->certificate->getClientOriginalExtension());

        $tenderApplication = TenderApplication::find($this->tenderApplication->id);
        $tenderApplication->update([
            'registration'=> $registration,
            'product_name'=> $productIntro,
            'ads'=> $ads,
            'capacity'=>$capacity,
            'company_info'=>$companyInfo,
            'certificate' => $certificate

        ]);
        return redirect(route('tender-step-three', $this->tenderApplication->id));
    }
    public function render()
    {
        return view('livewire.frontend.vendor.step-two')->extends('layouts.app');
    }
}
