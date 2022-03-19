<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\faqs\Faq;
use App\Models\Language;
use App\Models\services\Service;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ServicesController extends Controller
{

    public function index() : View
    {
        return view('admin.services.index');
    }


    public function create()
    {
        $languages = Language::all();
        if($languages->isEmpty()){
            return redirect()->back()->withError('حداقل یک زبان به سایت اضافه کنید.');
        }
        return view('admin.services.create', compact('languages'));
    }

    public function store(ServiceRequest $serviceRequest): RedirectResponse
    {


        Service::create($this->createData())->addMedia(storage_path('app/').request('file'))->toMediaCollection();

        if(request('action') == 'newForm'){
            return redirect(route('admin.services.create'))->withSuccess('خدمت مورد نظر ایجاد شد.');
        }


        return redirect(route('admin.services.index'))->withSuccess('خدمت مورد نظر ایجاد شد.');
    }

    public function show(Service $service) : View
    {
        $records = Faq::where('service_id', $service->id)->paginate(15);
        $languages = Language::all();
        return view('admin.services.show', compact(['service', 'records', 'languages']));
    }

    public function edit(Service $service): View
    {
        $languages = Language::all();

        return view('admin.services.edit', compact(['service', 'languages']));
    }

    public function update( Service $service) : RedirectResponse
    {

        if(request('file') != $service->getFirstMediaUrl()){
            if($service->hasMedia()){
                $service->getMedia()[0]->delete();
                $service->addMedia(storage_path('app/'.request('file')))->toMediaCollection();
            }else{
                $service->addMedia(storage_path('app/'.request('file')))->toMediaCollection();

            }
        }

        $service->update($this->createData());

        return redirect(route('admin.services.index'))->withSuccess('خدمت مورد نظر ایجاد شد.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function createData(){

        $service_data = [];

        $languages = Language::all();
        foreach ($languages as $lang) {
            $locale = getLocale($lang);
            $service_data[$locale] = [
                'title' => request($locale . '_title'),
                'content' => request($locale . '_content')
            ];
        }
        return $service_data;

    }
}
