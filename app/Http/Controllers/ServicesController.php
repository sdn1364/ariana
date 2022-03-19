<?php

namespace App\Http\Controllers;

use App\Models\faqs\Faq;
use App\Models\services\Service;
use Illuminate\View\View;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::withTranslation()->get();
        return view('pages.services',compact('services'));
    }
    public function questioner(Service $service) : View
    {

        $faqs = Faq::where('service_id', $service->id)->get();

        return view('pages.faq', compact('faqs'));
    }
}
