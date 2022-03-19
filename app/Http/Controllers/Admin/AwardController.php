<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AwardRequest;
use App\Models\awards\Award;
use App\Models\Language;
use Illuminate\Http\Request;

class AwardController extends Controller
{

    public function index()
    {
        return view('admin.awards.index');
    }


    public function create()
    {
        $languages = Language::all();
        return view('admin.awards.create', compact('languages'));
    }

    public function store(AwardRequest $awardRequest)
    {
        $award = Award::create($this->createData())->addMedia(storage_path('app/'.request('file')))->toMediaCollection();

        if (request('action') == 'newForm') {
            return redirect(route('admin.awards.create'))->withSuccess('جایزه مورد نظر ایجاد شد.');
        }

        return redirect(route('admin.awards.index'))->withSuccess('جایزه مورد نظر ایجاد شد.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function edit(Award $award)
    {
        $languages = Language::all();
        return view('admin.awards.edit', compact(['languages', 'award']));
    }

    public function update(AwardRequest $awardRequest, Award $award)
    {
        if(request('file') != $award->getFirstMediaUrl()){
            if($award->hasMedia()){
                $award->getMedia()[0]->delete();
                $award->addMedia(storage_path('app/'.request('file')))->toMediaCollection();
            }else{
                $award->addMedia(storage_path('app/'.request('file')))->toMediaCollection();
            }
        }
        $award->update($this->createData());

        return redirect(route('admin.awards.index'))->withSuccess('گواهی مورد نظر ویرایش شد.');
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
        $award_data = [];
        $languages = Language::all();

        foreach ($languages as $lang) {
            $award_data[getLocale($lang)] = [
                'content' => request(getLocale($lang) . '_content')
            ];
        }
        $award_data['date'] = request('date');

        return $award_data;
    }

}
