<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuicklinkRequest;
use App\Models\Language;
use App\Models\quicklinks\Quicklink;
use App\Models\sectors\Sector;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class QuicklinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create(): View
    {
        $languages = Language::all();
        $sectors = Sector::all();

        return view('admin.quicklinks.create', compact(['languages', 'sectors']));
    }

    public function store(QuicklinkRequest $quicklinkRequest) : RedirectResponse
    {

        Quicklink::create($this->createData())->addMedia(storage_path('app/'.request('file')))->toMediaCollection();

        if (request('action') == 'newForm') {
            return redirect(route('admin.quicklinks.create'))->withSuccess('لینک مورد نظر ایجاد شد.');
        }

        return redirect(route('admin.mainPage.index'))->withSuccess('لینک مورد نظر ایجاد شد.');

    }

    public function show(Quicklink $quicklink): View
    {
        return view('admin.quicklinks.show', compact('quicklink'));
    }


    public function edit(Quicklink $quicklink)
    {
        $languages = Language::all();
        $sectors = Sector::all();
        return view('admin.quicklinks.edit', compact(['languages', 'quicklink', 'sectors']));
    }

    public function update(QuicklinkRequest $quicklinkRequest, Quicklink $quicklink): RedirectResponse
    {

        if(request('file') != $quicklink->getFirstMediaUrl()){
            if($quicklink->hasMedia()){
                $quicklink->getMedia()[0]->delete();
                $quicklink->addMedia(storage_path('app/'.request('file')))->toMediaCollection();
            }else{
                $quicklink->addMedia(storage_path('app/'.request('file')))->toMediaCollection();
            }
        }

        $quicklink->update($this->createData());

        return redirect(route('admin.mainPage.index'))->withSuccess('لینک مورد نظر ویرایش شد.');
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
    private function createData()
    {
        $data = [];
        $languages = Language::all();

        foreach ($languages as $lang) {
            $data[getLocale($lang)] = [
                'title' => request(getLocale($lang) . '_title'),
                'text' => request(getLocale($lang) . '_text')
            ];
        }
        $data['link'] = request('link');

        return $data;
    }
}
