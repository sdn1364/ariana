<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InnovationRequest;
use App\Models\innovations\Innovation;
use App\Models\Language;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class InnovationController extends Controller
{

    public function index(): View
    {
        return view('admin.innovations.index');
    }

    public function create(): View
    {
        $languages = Language::all();
        return view('admin.innovations.create', compact('languages'));
    }

    public function store(InnovationRequest $innovationRequest): RedirectResponse
    {
        Innovation::create($this->createData())->addMedia(storage_path('app/'.request('file')))->toMediaCollection();

        if (request('action') == 'newForm') {
            return redirect(route('admin.innovations.create'))->withSuccess('مرحله مورد نظر ایجاد شد.');
        }

        return redirect(route('admin.innovations.index'))->withSuccess('مرحله مورد نظر ایجاد شد.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Innovation $innovation)
    {
        $languages = Language::all();
        return view('admin.innovations.show', compact(['languages', 'innovation']));

    }


    public function edit(Innovation $innovation) : View
    {
        $languages = Language::all();
        return view('admin.innovations.edit', compact(['innovation', 'languages']));
    }

    public function update(InnovationRequest $innovationRequest, Innovation $innovation)
    {

        if(request('file') != $innovation->getFirstMediaUrl()){
            if($innovation->hasMedia()){
                $innovation->getMedia()[0]->delete();
                $innovation->addMedia(storage_path('app/'.request('file')))->toMediaCollection();
            }else{
                $innovation->addMedia(storage_path('app/'.request('file')))->toMediaCollection();
            }
        }

        $innovation->update($this->createData());

        return redirect(route('admin.innovations.index'))->withSuccess('مناقصه مورد نظر ویرایش شد.');

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

    public function createData()
    {
        $data = [];
        $languages = Language::all();

        foreach($languages as $lang){
            $data[getLocale($lang)] = [
                'text'=> request(getLocale($lang).'_text')
            ];
        }
        $data['link'] = request('link');

        return $data;

    }
}
