<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FaqRequest;
use App\Models\faqs\Faq;
use App\Models\Language;
use App\Models\Questioner;
use App\Models\services\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class FaqController extends Controller
{

    public function index()
    {
        return view('admin.faqs.index');
    }

    public function create()
    {

        $questioners = Service::all();
        $languages = Language::all();

        if($languages->isEmpty()){
            return redirect()->back()->withError('حداقل یک زبان به سایت اضافه کنید.');
        }
        if($questioners->isEmpty()){
            return redirect()->back()->withError('حداقل یک خدمت به سایت اضافه کنید.');
        }

        return view('admin.faqs.create', compact('questioners', 'languages'));
    }

    public function store(FaqRequest $faq_request)
    {

        Faq::create($this->createData());

        if(request('action') == 'newForm'){
            return redirect(route('admin.faqs.create'))->withSuccess('سوال و جواب جدید ایجاد شد.');
        }
        return redirect(route('admin.faqs.index'))->withSuccess('سوال و جواب جدید ایجاد شد.');
    }

    public function show(Faq $faq) : View
    {
        $languages = Language::all();

        return view('admin.faqs.show', compact(['faq', 'languages']));
    }

    public function edit(Faq $faq) : View
    {
        $questioners = Service::all();
        $languages = Language::all();

        return view('admin.faqs.edit', compact(['faq', 'questioners', 'languages']));
    }

    public function update(Faq $faq, FaqRequest $faqRequest) : RedirectResponse
    {

        $faq->update($this->createData());
        return redirect(route('admin.faqs.index'))->withSuccess('سوالات مورد نظر ویرایش شد.');

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

    protected function createData(){
        $faq_data = [];

        $languages = Language::all();

        foreach($languages as $lang){

            $faq_data[getLocale($lang)] = [
                'question' => request(getLocale($lang).'_question'),
                'answer' => request(getLocale($lang).'_answer')
            ];
        }
        $faq_data['service_id'] = request('service_id');

        return $faq_data;
    }
}
