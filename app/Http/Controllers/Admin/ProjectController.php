<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Language;
use App\Models\projects\Project;
use App\Models\sectors\Sector;
use App\Models\services\Service;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class ProjectController extends Controller
{

    public function index(): View
    {
        return view('admin.projects.index');
    }

    public function create()
    {
        $sectors = Sector::where('parent_id','!=', 0)->get();
        $services = Service::all();
        $languages = Language::all();
        if($languages->isEmpty()){
            return redirect()->back()->withError('حداقل یک زبان به سایت اضافه کنید.');
        }
        if($sectors->isEmpty()){
            return redirect()->back()->withError('حداقل یک بخش(Sector) به سایت اضافه کنید.');
        }
        if($services->isEmpty()){
            return redirect()->back()->withError('حداقل یک خدمت به سایت اضافه کنید.');
        }
        return view('admin.projects.create', compact(['sectors','services','languages']));
    }

    public function store(ProjectRequest $projectRequest): RedirectResponse
    {
        $files = json_decode(request('files'));

        $project = Project::create($this->createData());

        foreach($files as $file){
            $project->addMedia(storage_path('app/').$file)->toMediaCollection();
        }

        if(request('action') == 'newForm'){
            return redirect(route('admin.projects.create'))->withSuccess('پروژه جدید ایجاد شد');
        }

        return redirect(route('admin.projects.index'))->withSuccess('پروژه جدید ایجاد شد');
    }


    public function show(Project $project) : View
    {
        $languages = Language::all();

        return view('admin.projects.show', compact(['project', 'languages']));
    }


    public function edit(Project $project): View
    {

        $sectors = Sector::where('parent_id','!=', 0)->get();
        $services = Service::all();
        $languages = Language::all();

        return view('admin.projects.edit', compact(['project', 'sectors', 'services', 'languages']));
    }

    public function update(ProjectRequest $projectRequest, Project $project): RedirectResponse
    {
        $files = json_decode(request('files'));

        if(request('files')){
            foreach($files as $file){
                $project->addMedia(storage_path('app/').$file)->toMediaCollection();
            }    
        }


        $project->update($this->createData());

        return redirect(route('admin.projects.index'))->withSuccess('پروژه مورد نظر ویرایش شد.');
    }

    public function destroy($id)
    {

    }

    private function createData()
    {
        $project_data = [];
        $languages = Language::all();
        foreach($languages as $lang){

            $locale = getLocale($lang);

            $project_data[$locale]= [
                'title'=> request($locale.'_title'),
                'background'=> request($locale.'_background'),
                'roles'=> request($locale.'_roles'),
                'location'=> request($locale.'_location'),
                'client'=> request($locale.'_client'),
            ];
        }

        $fileName = '';

        if(request()->file('brochure')){
            $fileName = Str::random(80).'.'.request('brochure')->getClientOriginalExtension();
            request()->file('brochure')->storeAs('',$fileName, 'uploads');
            $project_data['brochure'] = $fileName;
        }

        $project_data['start_date'] = Carbon::parse(request('start_date'));
        $project_data['due_date'] = Carbon::parse(request('due_date'));
        $project_data['progress'] = request('progress');
        $project_data['lat'] = request('lat');
        $project_data['long'] = request('long');
        $project_data['sector_id'] = request('sector_id');
        $project_data['service_id'] = request('service_id');

        return $project_data;
    }

    public function deleteImage()
    {
        $id = request('id');
        $project_id = request('project_id');
        $project =  Project::find($project_id);
        $project->deleteMedia($id);

        return response()->json('deleted',200);
    }
}
