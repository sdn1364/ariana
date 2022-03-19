<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\contacts\Contact;
use App\Models\Language;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class ContactController extends Controller
{

    public function index(): View
    {
        return view('admin.contacts.index');
    }

    public function create(): View
    {
        $languages = language::all();
        return view('admin.contacts.create', compact('languages'));
    }

    public function store(ContactRequest $contactRequest): RedirectResponse
    {

        Contact::create($this->createData());

        if (request('action') == 'newForm') {
            return redirect(route('admin.contacts.create'))->withSuccess('تماس جدید ایجاد شد');
        }

        return redirect(route('admin.contacts.index'))->withSuccess('تماس جدید ایجاد شد');
    }

    public function show(Contact $contact)
    {
        return view('admin.contacts.show', compact('contact'));
    }

    public function edit(Contact $contact): View
    {
        $languages = language::all();

        return view('admin.contacts.edit', compact(['contact', 'languages']));
    }

    public function update(ContactRequest $contactRequest, Contact $contact): RedirectResponse
    {
        $contact->update($this->createData());
        return redirect(route('admin.contacts.index'))->withSuccess('تماس مورد نظر ویرایش شد.');
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

    protected function createData()
    {
        $contact_data = [];
        foreach (getAllLanguages() as $lang) {
            $contact_data[getLocale($lang)] = [
                'title' => request(getLocale($lang) . '_title'),
                'address' => request(getLocale($lang) . '_address'),
                'working_time' => request(getLocale($lang) . '_working_time'),
            ];
        }
        $contact_data['lat'] = request('lat');
        $contact_data['long'] = request('long');
        $contact_data['zip'] = request('zip');
        $contact_data['phone'] = request('phone');
        $contact_data['fax'] = request('fax');

        return $contact_data;
    }
}
