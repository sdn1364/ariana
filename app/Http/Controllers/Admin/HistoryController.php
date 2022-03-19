<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HistoryRequest;
use App\Models\Histories\History;
use App\Models\Language;
use App\Models\sectors\Sector;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        return view('admin.history.index');
    }
    public function create(){

        $languages = Language::all();

        return view('admin.history.create', compact('languages'));
    }

    public function show(History $history)
    {
        $languages = Language::all();

        return view('admin.history.show', compact(['languages','history']));
    }


    public function store(HistoryRequest $historyRequest){
        History::create($this->createData())->addMedia(storage_path('app/'.request('file')))->toMediaCollection();

        if (request('action') == 'newForm') {
            return redirect(route('admin.histories.create'))->withSuccess('تاریخچه مورد نظر ایجاد شد.');
        }

        return redirect(route('admin.histories.index'))->withSuccess('تاریخچه مورد نظر ایجاد شد.');

    }
    public function edit(History $history){
        $languages = Language::all();

        return view('admin.history.edit', compact(['languages', 'history']));
    }
    public function update(History $history){
        if(request('file') != $history->getFirstMediaUrl()){
            if($history->hasMedia()){
                $history->getMedia()[0]->delete();
                $history->addMedia(storage_path('app/'.request('file')))->toMediaCollection();
            }else{
                $history->addMedia(storage_path('app/'.request('file')))->toMediaCollection();

            }
        }

        $history->update($this->createData());

        return redirect(route('admin.histories.index'))->withSuccess('تاریخچه مورد نظر ویرایش شد.');
    }

    public function createData(){
        $history_data = [];
        $languages = Language::all();

        foreach ($languages as $lang) {
            $history_data[getLocale($lang)] = [
                'content' => request(getLocale($lang) . '_content')
            ];
        }
        $history_data['year'] = request('year');

        return $history_data;
    }
}
