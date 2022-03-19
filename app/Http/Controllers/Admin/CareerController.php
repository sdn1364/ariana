<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CareerRequest;
use App\Models\careers\Career;
use App\Models\Language;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CareerController extends Controller
{

    public function index(): View
    {
        return view('admin.careers.index');
    }

    public function create(): View
    {
        $languages = Language::all();
        return view('admin.careers.create', compact('languages'));
    }

    public function store(CareerRequest $careerRequest)
    {
        Career::create($this->createData())->addMedia(storage_path('app/').request('file'))->toMediaCollection();

        if(request('action') == 'newForm'){
            return redirect(route('admin.careers.create'))->withSuccess('شغل مورد نظر ایجاد شد.');
        }

        return redirect(route('admin.careers.index'))->withSuccess('شغل مورد نظر ایجاد شد.');
    }

    public function show(Career $career) : View
    {
        $languages = Language::all();
        return view('admin.careers.show', compact(['career','languages']));
    }

    public function edit(Career $career): View
    {
        $languages = Language::all();
        return view('admin.careers.edit', compact(['career', 'languages']));
    }

    public function update(CareerRequest $careerRequest, Career $career): RedirectResponse
    {
        $career->update($this->createData());
        return redirect(route('admin.careers.index'))->withSuccess('شغل مورد نظر ویرایش شد.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    protected function createData()
    {
        $data=[];
        $languages  = Language::all();

        foreach( $languages as $lang){
            $data[getLocale($lang)] =[
                'title'=> request(getLocale($lang).'_title'),
                'summary' => request(getLocale($lang).'_summary'),
                'section' => request(getLocale($lang).'_section'),
                'location' => request(getLocale($lang).'_location'),
                'responsibilities' => request(getLocale($lang).'_responsibilities'),
                'requirements'=> request(getLocale($lang). '_requirements')
            ];
        }

        return $data;
    }
}
