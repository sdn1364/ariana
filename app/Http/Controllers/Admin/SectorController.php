<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SectorRequest;
use App\Models\Language;
use App\Models\sectors\Sector;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class SectorController extends Controller
{

    public function index(): View
    {

        return view('admin.sectors.index');
    }

    public function create()
    {
        $sectors = Sector::withTranslation()->get();
        $languages = Language::all();
        if($languages->isEmpty()){
            return redirect()->back()->withError('حداقل یک زبان به سایت اضافه کنید.');
        }
        return view('admin.sectors.create', compact(['sectors', 'languages']));
    }

    public function store(SectorRequest $sectorRequest): RedirectResponse
    {

        $sector = Sector::create($this->createData())->addMedia(storage_path('app/'.request('file')))->toMediaCollection();

        $banner = request()->file('banner');

        if($banner){
            $fileName = $banner->store('temp');

            $sector->addMedia(storage_path('app/'.$fileName))->toMediaCollection('banner');
        }

        if (request('action') == 'newForm') {
            return redirect(route('admin.sectors.create'))->withSuccess('بخش مورد نظر ایجاد شد.');
        }

        return redirect(route('admin.sectors.index'))->withSuccess('بخش مورد نظر ایجاد شد.');

    }

    public function show(Sector $sector): View
    {
        $languages = Language::all();
        return view('admin.sectors.show', compact(['sector', 'languages']));
    }

    public function edit(Sector $sector): View
    {
        $sectors = Sector::with('translations')->get();
        $languages = Language::all();



        return view('admin.sectors.edit', compact(['sector', 'sectors', 'languages']));
    }


    public function update(Sector $sector)
    {


        if(request('file') != $sector->getFirstMediaUrl()){
            if($sector->hasMedia()){
                $sector->getMedia()[0]->delete();
                $sector->addMedia(storage_path('app/'.request('file')))->toMediaCollection();
            }else{
                $sector->addMedia(storage_path('app/'.request('file')))->toMediaCollection();

            }
        }

        $banner = request()->file('banner');

        if($banner){
            $fileName = $banner->store('temp');

            $sector->addMedia(storage_path('app/'.$fileName))->toMediaCollection('banner');
        }


        $sector->update($this->createData());

        return redirect(route('admin.sectors.index'))->withSuccess('بخش مورد نظر ویرایش شد.');
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

    private function createData()
    {
        $sector_data = [];
        $languages = Language::all();

        foreach ($languages as $lang) {
            $sector_data[getLocale($lang)] = [
                'title' => request(getLocale($lang) . '_title'),
                'content' => request(getLocale($lang) . '_content')
            ];
        }
        $sector_data['parent_id'] = request('parent_id');
        $sector_data['type'] = request('type');

        return $sector_data;
    }
}
