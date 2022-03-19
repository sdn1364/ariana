<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StaffRequest;
use App\Models\Language;
use App\Models\staffs\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        return view('admin.staff.index');
    }

    public function create()
    {

        $languages = Language::all();

        return view('admin.staff.create', compact(['languages']));
    }

    public function store(StaffRequest $request)
    {

        $staff = Staff::create($this->createData());

        if (request('file')) {
            $staff->addMedia(storage_path('app/' . request('file')))->toMediaCollection();
        }
        if (request('action') == 'newForm') {
            return redirect(route('admin.staffs.create'))->withSuccess('کارمند مورد نظر ایجاد شد.');
        }

        return redirect(route('admin.staffs.index'))->withSuccess('کارمند مورد نظر ایجاد شد.');

    }

    public function edit(Staff $staff)
    {
        $languages = Language::all();
        return view('admin.staff.edit', compact(['staff', 'languages']));
    }

    public function update(StaffRequest $request, Staff $staff)
    {
        if (request('file') != $staff->getFirstMediaUrl()) {
            if ($staff->hasMedia()) {
                $staff->getMedia()[0]->delete();
                $staff->addMedia(storage_path('app/' . request('file')))->toMediaCollection();
            } else {
                $staff->addMedia(storage_path('app/' . request('file')))->toMediaCollection();
            }
        }
        $staff->update($this->createData());

        return redirect(route('admin.staffs.index'))->withSuccess('کارمند مورد نظر ویرایش شد.');

    }

    public function createData()
    {
        $staff_data = [];
        $languages = Language::all();

        foreach ($languages as $lang) {
            $staff_data[getLocale($lang)] = [
                'name' => request(getLocale($lang) . '_name'),
                'description' => request(getLocale($lang) . '_description'),
                'position' => request(getLocale($lang) .'_position')
            ];
            $staff_data['type'] = request('type');
            $staff_data['link'] = request('link');
        }
        return $staff_data;
    }
}
