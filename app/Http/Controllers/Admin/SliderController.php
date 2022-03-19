<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SlideRequest;
use App\Models\Language;
use App\Models\sectors\Sector;
use App\Models\slides\Slide;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class SliderController extends Controller
{
    public function index(): View
    {
        return view('admin.sliders.index');
    }

    public function create(): View
    {
        $languages = Language::all();
        $sectors = Sector::all();

        return view('admin.sliders.create', compact(['languages', 'sectors']));
    }

    public function store(SlideRequest $slideRequest): RedirectResponse
    {
        Slide::create($this->createData())->addMedia(storage_path('app/').request('file'))->toMediaCollection();

        if (request('action') == 'newForm') {
            return redirect(route('admin.slideshows.create'))->withSuccess('اسلاید مورد نظر ایجاد شد');
        }

        return redirect(route('admin.mainPage.index'))->withSuccess('اسلاید مورد نظر ایجاد شد');
    }

    public function show(Slide $slide)
    {
        $languages = Language::all();
        return view('admin.sliders.show', compact(['slide','languages']));
    }

    public function edit(Slide $slide): View
    {
        $languages = Language::all();
        $sectors = Sector::all();
        return view('admin.sliders.edit', compact(['slide', 'languages', 'sectors']));
    }


    public function update(SlideRequest $slideRequest, Slide $slide): RedirectResponse
    {

        if(request('file') != $slide->getFirstMediaUrl()){
            $slide->getMedia()[0]->delete();
            $slide->addMedia(storage_path('app/'.request('file')))->toMediaCollection();
        }

        $slide->update($this->createData());
        return redirect(route('admin.mainPage.index'))->withSuccess('اسلاید مورد نظر ویرایش شد.');
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

    private function createData(){
        $slide_data = [];

        foreach (getAllLanguages() as $lang) {
            $slide_data[getLocale($lang)] = [
                'title' => request(getLocale($lang) . '_title')
            ];
        }
        $slide_data['link'] = request('link');

        return $slide_data;
    }
}
