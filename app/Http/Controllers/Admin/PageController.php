<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Language;
use App\Models\pages\Page;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PageController extends Controller
{

    public function index() : View
    {
        return view('admin.pages.index');
    }

    public function create() : View
    {
        $languages = Language::all();
        $pages = Page::withTranslation()->get();

        return view('admin.pages.create', compact(['languages', 'pages']));
    }

    public function store(PageRequest $pageRequest) : RedirectResponse
    {



        $page = Page::create($this->createData());

        if(request('file')){
            $page->addMedia(storage_path('app/'.request('file')))->toMediaCollection();
        }

        return redirect(route('admin.pages.index'))->withSuccess('صفحه جدید ساخته شد.');
    }

    public function show(Page $page) : View
    {
        $pages = Page::withTranslation()->get();

        $languages = Language::all();

        return view('admin.pages.show', compact(['page', 'pages', 'languages']));
    }

    public function edit(Page $page) : View
    {
        $pages = Page::withTranslation()->get();

        $languages = Language::all();

        return view('admin.pages.edit', compact(['page', 'pages', 'languages']));
    }


    public function update(PageRequest $pageRequest, Page $page)
    {
        if(request('file') != $page->getFirstMediaUrl()){
            if($page->hasMedia()){
                $page->getMedia()[0]->delete();
                $page->addMedia(storage_path('app/'.request('file')))->toMediaCollection();
            }else{
                $page->addMedia(storage_path('app/'.request('file')))->toMediaCollection();

            }
        }

        $page->update($this->createData());
         return redirect(route('admin.pages.index'))->withSuccess('صفحه مورد نظر ویرایش شد.');
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
        foreach( $languages as $lang){
            $data[getLocale($lang)] = [
                'title' => request(getLocale($lang).'_title'),
                'content' => request(getLocale($lang).'_content'),
            ];
        }

        $data['parent_id']= request('parent_id');

        return $data;
    }

}
