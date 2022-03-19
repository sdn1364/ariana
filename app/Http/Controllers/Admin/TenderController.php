<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TenderRequest;
use App\Models\Language;
use App\Models\sectors\Sector;
use App\Models\tenders\Tender;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class TenderController extends Controller
{

    public function index(): View
    {
        return view('admin.tenders.index');
    }

    public function create(): View
    {
        $sectors = Sector::where('parent_id', '!=', 0)->get();
        $languages = Language::all();
        return view('admin.tenders.create', compact(['sectors', 'languages']));
    }

    public function store(TenderRequest $tenderRequest)
    {
        $fileName = '';
        if (request()->file('document')) {
            $fileName = Str::random(80) . '.' . request('document')->getClientOriginalExtension();
            request()->file('document')->storeAs('', $fileName, 'uploads');
        }

        Tender::create($this->createData($fileName))->addMedia(storage_path('app/' . request('file')))->toMediaCollection();

        if (request('action') == 'newForm') {
            return redirect(route('admin.tenders.create'))->withSuccess('مناقصه جدید ایجاد شد.');
        }

        return redirect(route('admin.tenders.index'))->withSuccess('مناقصه جدید ایجاد شد.');
    }


    public function show(Tender $tender): View
    {
        $languages = Language::all();
        return view('admin.tenders.show', compact(['tender','languages']));
    }


    public function edit(Tender $tender): View
    {
        $sectors = Sector::where('parent_id', '!=', 0)->get();
        $languages = Language::all();
        return view('admin.tenders.edit', compact(['tender', 'sectors', 'languages']));
    }

    public function update(TenderRequest $tenderRequest, Tender $tender): RedirectResponse
    {


        if(request('file') != $tender->getFirstMediaUrl()){
            if($tender->hasMedia()){
                $tender->getMedia()[0]->delete();
                $tender->addMedia(storage_path('app/'.request('file')))->toMediaCollection();
            }else{
                $tender->addMedia(storage_path('app/'.request('file')))->toMediaCollection();

            }
        }


        $fileName = '';
        if (request()->file('document')) {
            $fileName = Str::random(80) . '.' . request('document')->getClientOriginalExtension();
            request()->file('document')->storeAs('', $fileName, 'uploads');
        }
        $tender->update($this->createData($fileName));

        return redirect(route('admin.tenders.index'))->withSuccess('مناقصه مورد نظر ویرایش شد.');
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

    private function createData($fileName)
    {
        $data = [];

        foreach (getAllLanguages() as $lang) {
            $data[getLocale($lang)] = [
                'title' => request(getLocale($lang) . '_title'),
                'brief' => request(getLocale($lang) . '_brief'),
                'roles' => request(getLocale($lang) . '_roles'),
            ];
        }


        $data['code'] = request('code');
        $data['deadline'] = request('deadline');
        $data['progress'] = request('progress');
        $data['sector_id'] = request('sector_id');
        $data['type'] = request('type');
        $data['tags'] = request('tags');
        $data['document'] = $fileName;

        return $data;

    }
}
