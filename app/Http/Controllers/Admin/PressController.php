<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PressRequest;
use App\Jobs\FileAssignJob;
use App\Models\Language;
use App\Models\presses\Press;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PressController extends Controller
{

    public function index(): View
    {
        return view('admin.presses.index');
    }

    public function create()
    {
        $languages = Language::all();
        if($languages->isEmpty()){
            return redirect()->back()->withError('حداقل یک زبان به سایت اضافه کنید.');
        }
        return view('admin.presses.create', compact('languages'));
    }

    public function store(PressRequest $pressRequest) : RedirectResponse
    {
        $files = json_decode(request('files'));

        $press = Press::create($this->createData());

        foreach($files as $file){
            $press->addMedia(storage_path('app/').$file)->toMediaCollection();
        }

        if(request('action') == 'newForm'){
            return redirect(route('admin.presses.create'))->withSuccess('پروژه جدید ایجاد شد');
        }

        return redirect(route('admin.presses.index'))->withSuccess('خبر مورد نظر ایجاد شد');
    }

    public function show(Press $press)
    {
        $languages = Language::all();
        return view('admin.presses.show', compact(['press','languages']));
    }

    public function edit(Press $press): View
    {
        $languages = Language::all();

        return view('admin.presses.edit', compact(['press', 'languages']));
    }

    public function update(PressRequest $pressRequest, Press $press) : RedirectResponse
    {
        $files = json_decode(request('files'));

        if($press->hasMedia()){
            if(request('files') != $press->getFirstMediaUrl() && request('files')){
                foreach($files as $file){
                    $press->addMedia(storage_path('app/').$file)->toMediaCollection();
                }
            }
        }
        $press->update($this->createData());

        return redirect(route('admin.presses.index'))->withSuccess('خبر مورد نظر ویرایش شد.');
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

    public function createData(){
        $press_data = [];

        foreach (getAllLanguages() as $lang) {
            $press_data[getLocale($lang)] = [
                'title' => request(getLocale($lang) . '_title'),
                'content' => request(getLocale($lang) . '_content')
            ];
        }

        $press_data['tags'] = request('tags');
        $press_data['subject'] = request('subject');

        return $press_data;
    }
    public function deleteImage()
    {
        $id = request('id');
        $project_id = request('project_id');
        $project =  Press::find($project_id);
        $project->deleteMedia($id);

        return response()->json('deleted',200);
    }
}
