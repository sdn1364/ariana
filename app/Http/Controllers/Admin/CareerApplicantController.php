<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\careers\Career;
use App\Models\careers\CareerApplication;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class CareerApplicantController extends Controller
{
    public function index() : View
    {
        return view('admin.careerApplications.index');
    }
    public function show($id)
    {
        $careerApplication = CareerApplication::find($id);
        $career = Career::find($careerApplication->career_id);
        return view('admin.careerApplications.show',compact(['career','careerApplication']));

    }
    public function create()
    {

    }

    public function store()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }
    public function destory(){

    }

    public function download($id)
    {
        $careerApplication = CareerApplication::find($id);

        return Storage::download($careerApplication->resume);

    }
}
